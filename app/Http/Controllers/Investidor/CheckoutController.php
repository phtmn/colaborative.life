<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Investimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use MercadoPago\SDK as MP;

use Auth;
use Alert;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pagar(Request $request){

        //dd($request->all());
        //dd(toMoney($request->valor));
        $osc = DB::table('oscs')->where('id',$request->osc_id)->first();
        
        $investimento = new Investimento();
        $investimento->descricao            = 'Investimento em:'.$osc->nome_fantasia;
        $investimento->valor                = toMoney($request->valor);
        $investimento->status_interno       = 'Aguardando Pagamento';
        $investimento->user_id              = $request->user()->id;
        $investimento->projeto_id           = $request->projeto_id;
        $investimento->osc_id               = $request->osc_id;
        $investimento->save();

        $pagamento = $this->gerarPagamento($investimento);

        $investimento = Investimento::find($investimento->id);

        if(env('APP_ENV') =='local'){
            $investimento->mp_url = $pagamento->sandbox_init_point;
        }else{
            $investimento->mp_url = $pagamento->init_point;
        }

        $investimento->save();

        if(env('APP_ENV') == 'local'){
            return redirect()->to($pagamento->sandbox_init_point);
        } else{
            return redirect()->to($pagamento->init_point);
        }

        
    }

    public function gerarPagamento($investimento){       

        // MP::setClientSecret('KDHCM0emBn1CfV64ShWWdcugTYd3nCIZ');
        // MP::setClientId('5442329168530937');

        $preference = new \MercadoPago\Preference();

        # Create an item object
        $item               = new \MercadoPago\Item();
        $item->id           = $investimento->osc_id;
        $item->title        = $investimento->descricao;
        $item->quantity     = 1;
        $item->currency_id  = "BRL";
        $item->unit_price   = $investimento->valor;

        # Create a payer object
        $payer          = new \MercadoPago\Payer();
        $payer->email   = $investimento->usuario()->email;
        $payer->name    = $investimento->usuario()->name;

        # Setting preference properties
        $preference->items = array($item);
        $preference->payer = $payer;

        # callbacks urls
        $preference->back_urls = array(
            "success" => env('APP_URL').'/painel-investidor/investimento/success',
            "failure" => env('APP_URL').'/painel-investidor/investimento/failure',
            "pending" => env('APP_URL').'/painel-investidor/investimento/pending'
        );

        $preference->auto_return        = "approved";
        $preference->payment_methods = array(
            "excluded_payment_types" => array(
              array("id" => "ticket")
            ),            
          );
        $preference->external_reference = $investimento->id;

        # Save and posting preference
        $response = $preference->save();
        return $response;
    }

    public function usuarioTeste(){
        MP::setAccessToken("TEST-7474015869398412-012321-2b8b21364f6467edb6bda676596b4712-4901986");

        $body = array(
            "json_data" => array(
                "site_id" => "MLB"
            )
        );

        $result = MP::post('/users/test_user', $body);

        var_dump($result);
    }
}
