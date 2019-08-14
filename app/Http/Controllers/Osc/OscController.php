<?php

namespace App\Http\Controllers\Osc;

use App\Models\Endereco;
use App\Models\Osc;
use App\Models\Banco;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Throwable;
use Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateOscRequest;

class OscController extends Controller
{

    public function index(){

        $osc = auth()->user()->osc();
        if($osc){
            return view('osc.painel',[
                'osc'            => $osc,
                'projetos'       => $osc->projetos()->count(),
                'metas'          => DB::table('metas_oscs')->where('osc_id',$osc->id)->get(),
                'investimentos'  => DB::table('investimentos')->where('osc_id',$osc->id)->sum('valor'),
                'investimentos_p'=> DB::table('investimentos')->where('projeto_id','<>',null)
                                        ->where('osc_id',$osc->id)->sum('valor'),
            ]);
        }
        return view('osc.bemvindo');
    }


    public function create(){
        $osc = OSC::where('user_id',Auth::user()->id)->first();
        if($osc){
            return view('osc.edit',[
                'osc'           => $osc,
                'bancos'        => DB::table('bancos')->pluck('banco','id'),
                'projetos'      => $osc->projetos()->count(),
                'metas'         => DB::table('metas_oscs')->where('osc_id',$osc->id)->get(),

            ]);
        }
        return view('osc.create',[
            'bancos' => DB::table('bancos')->pluck('banco','id')
        ]);
    }


    public function store222(CreateOscRequest $request){

        $result = DB::transaction(function() use ($request) {
            try {
               
                OSC::UpdateOrCreate(
                    ['user_id' => auth()->user()->id],
                    [
                    
                       'nome_fantasia'         => $request->nome_fantasia,                      
                       'sigla'                 => $request->sigla,
                       'ano_fundacao'          => $request->ano_fundacao,
                       'user_id'               => $request->user()->id

                    ]);



                Alert::success('Os dados da Organização fosssraaaam salvos', 'Sucesso')->persistent('Ok');
                return redirect()->route('osc.create');

            } catch (Throwable $t) {
                Alert::error('Algum Erro ocorreu'.$t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->back()->withInput();
            }
        },2); return $result;
    }

    public function store(Request $request){

        //dd($request->all());
        $osc = OSC::UpdateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'num_doc'         => $request->num_doc,                                       
                'telefone'        => $request->telefone,                                       
                'cep'             => $request->cep,                                       
                'logradouro'      => $request->logradouro,                                       
                'bairro'          => $request->bairro,                                       
                'cidade'          => $request->cidade,                                       
                'uf'          => $request->uf,                                       
                'user_id'   => auth()->user()->id
            ]
        );

        if($osc){
            Alert::success('Os dados do proponente foram salvos', 'Sucesso')->persistent('Ok');
                return redirect()->route('osc.create');
        }

        Alert::error('Algum Erro ocorreu'.$t->getMessage(), 'Erro')->persistent('Ok');
        return redirect()->back()->withInput();
    }

    public function landingPage(){
        if(Auth::user()->osc() == null){

            // Alert::warning('Você precisa cadastrar sua Osc Primeiro','Keep Calm')->persistent('Entendi');
            return redirect()->route('osc.create');
        }else{
            $osc = Osc::where('user_id',Auth::user()->id)->first();
            //dd($osc);
            return view('dashboard.investimentos.detalhe_osc',[
                'osc'        => $osc,
                'metas'      => DB::table('osc_metas')->where('osc_id',$osc->id)->get(),
                'galerias'   => DB::table('galerias')->where('osc_id',$osc->id)->get(),
                'projetos'   => DB::table('projetos')->where('osc_id',$osc->id)->get(),
                'tab'        => 'investir'
            ]);
        }
    }

    public function landingPageProjeto($id){

        $projeto = DB::table('projetos')->where('id',$id)->first();

        return view('dashboard.investimentos.detalhe_projeto',[
            'projeto'    => $projeto,
            'galerias'   => DB::table('galerias')->where('osc_id',$projeto->osc_id)->get(),
            'metas'      => DB::table('osc_metas')->where('osc_id',$projeto->osc_id)->get(),
            'osc'        => DB::table('oscs')->where('id',$projeto->osc_id)->first(),
            'tab'        => 'investir'
        ]);
    }

    public function getInvestimentos(){
        $data = DB::table('investimentos')->where('osc_id',auth()->user()->osc()->id)->get();

        return view('dashboard.osc.investimentos',[
            'data' => $data,
            'tab'   => 'investir'
        ]);
    }

    public function uploadFoto(Request $request){

        $osc = auth()->user()->osc();

        $image = $request->file('file');
        $imageName = 'LOGOOSC-'.$osc->id.time();
        try{

            if($osc->logo != null) {
                Storage::disk('s3')->delete($osc->logo);
            }

            Storage::disk('s3')->put($imageName, file_get_contents($image),'public');
            $imageNameAWS  = Storage::disk('s3')->url($imageName);

            OSC::find($osc->id)->update(['logo' => $imageNameAWS ]);
            return redirect()->back();
        }catch (\Exception $e){
            dd($e->getMessage());
            return redirect()->back();
        }


    }
}
