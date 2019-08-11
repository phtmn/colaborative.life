<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Endereco;
use App\Models\Osc;
use App\Models\Banco;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Throwable;
use Illuminate\Support\Facades\DB;

class OscController extends Controller
{

    public function create(){

        $osc = OSC::where('user_id',Auth::user()->id)->first();
        if($osc){
            return view('dashboard.osc.edit',[
                'tab'       => 'osc',
                'osc'       => $osc,
                'banco'     => $osc->banco(),
                'endereco'  => $osc->endereco(),
                'metas'     => $osc->metas(),
            ]);
        }
        return view('dashboard.osc.create',[
            'tab'       => 'osc',
        ]);
    }

    public function store(Request $request){
            //dd($request->all());
        $file_path = null;
        if($request->logo){
            $file       = $request->file('logo');
            $name       = $file->getClientOriginalName();
            $path       = public_path('uploads/osc');
            $file_path  = 'uploads/osc/'.$name;
            $file->move($path,$name);
        };



        $result = DB::transaction(function() use ($request,$file_path) {
                //dd($request->all());
            try {



                // $bancoDoacao = new banco();
                // $bancoDoacao->banco         = $request->banco;
                // $bancoDoacao->conta         = $request->conta;
                // $bancoDoacao->agencia       = $request->agencia;
                // $bancoDoacao->tipo_conta    = 'doacao';
                // $bancoDoacao->contaDv       = $request->contaDv;
                // $bancoDoacao->save();

                // $endereco = new Endereco();
                // $endereco->cep = $request->cep;
                // $endereco->rua = $request->rua;
                // $endereco->numero = $request->numero;
                // $endereco->cidade = $request->cidade;
                // $endereco->bairro = $request->bairro;
                // $endereco->uf = $request->uf;
                // $endereco->complemento = $request->complemento;
                // $endereco->save();

                $osc = new Osc();
           
                $osc->nome                  = $request->nome;
                $osc->numdoc                = $request->numdoc;
                $osc->telefone              = $request->telefone;
                $osc->cep                   = $request->cep;
                $osc->rua                   = $request->rua;
                $osc->bairro                = $request->bairro;
                $osc->numero                = $request->numero;                       
                $osc->cidade                = $request->cidade;
                $osc->uf                    = $request->uf;
                $osc->site                  = $request->site;                     
                $osc->facebook              = $request->facebook;
                $osc->instagram             = $request->instagram;

               
                $osc->user_id               = $request->user()->id;
                // $osc->endereco_id           = $endereco->id;
                
                $osc->save();

                Alert::success('Os dados da OSC foram salvos', 'Sucesso')->persistent('Ok');
                return redirect()->back();

            } catch (Throwable $t) {
                Alert::error('Algum Erro ocorrou'.$t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->back();
            }
        },2); return $result;
    }

    public function update(Request $request,$id){

        $file_path = null;
        if($request->logo){
            $file       = $request->file('logo');
            $name       = $file->getClientOriginalName();
            $path       = public_path('uploads/osc');
            $file_path  = 'uploads/osc/'.$name;
            $file->move($path,$name);
        };

        $osc = OSC::where('user_id',Auth::user()->id)->first();
        $dados = $request->all();
        $result = DB::transaction(function() use ($request,$dados,$osc,$file_path) {
            try {
                $osc->endereco()->update($dados);
                $osc->banco()->update($dados);

                $osc->nome_fantasia = $request->nome_fantasia;
                $osc->sigla_osc = $request->sigla_osc;
                $osc->cnae = $request->cnae;
                $osc->responsavel_legal = $request->responsavel_legal;
                $osc->situacao_imovel = $request->situacao_imovel;
                $osc->ano_inscricao_cnpj = $request->ano_inscricao_cnpj;
                $osc->ano_fundacao = $request->ano_fundacao;
                $osc->email = $request->email;
                $osc->site = $request->site;
                $osc->descricao_osc = $request->descricao_osc;
                $osc->telefone = $request->telefone;
                $osc->objetivo_ods = $request->objetivo_ods;
                $osc->metas_ods = $request->metas_ods;
                $osc->atividade_economica = $request->atividade_economica;
                $osc->area_atuacao = $request->area_atuacao;
                $osc->sub_area1 = $request->sub_area1;
                $osc->sub_area2 = $request->sub_area2;
                $osc->surgimento_osc = $request->surgimento_osc;
                $osc->missao_osc = $request->missao_osc;
                $osc->visao_osc = $request->visao_osc;
                $osc->finalidades_estatutarias_ods = $request->finalidades_estatutarias_ods;
                $osc->link_estatuto_osc = $request->link_estatuto_osc;
                $osc->logo = $file_path ? $file_path : $osc->logo;

                $osc->save();
                Alert::success('Seus dados foram Salvos', 'Sucesso')->persistent('Ok');
                //return redirect()->route('investimentos.index');
                return redirect()->back();
            } catch (Throwable $t) {
                Alert::warning('Não foi possível Salvar seus dados' . $t->getMessage(), 'Erro')->persistent('Ok');
                //return redirect()->route('investimentos.index');
                return redirect()->back();
            }
        },2);
        return $result;
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
        $data = DB::table('investimentos')
                    ->where('osc_id',auth()->user()->osc()->id)
                    ->paginate(8);

        return view('dashboard.osc.investimentos',[
            'data' => $data,
            'tab'   => 'investir'
        ]);
    }
}
