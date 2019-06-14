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


    public function store(CreateOscRequest $request){


        $result = DB::transaction(function() use ($request) {
            try {

                OSC::UpdateOrCreate(
                    ['user_id' => auth()->user()->id],
                    [
                       'nome_fantasia'         => $request->nome_fantasia,
                       'cnpj'                  => $request->cnpj,
                       'ano_fundacao'          => $request->ano_fundacao,
                       'sigla'                 => $request->sigla,
                       'cnaes'                 => $request->cnae,
                       'responsavel'           => $request->responsavel,
                       'email'                 => $request->email,
                       'telefone'              => $request->telefone,
                       'site'                  => $request->site,
                       'facebook'              => $request->facebook,
                       'instagram'             => $request->instagram,
                       'youtube'               => $request->youtube,
                       'video_institucional'   => toEmbeb($request->video_institucional),
                       'mapa'                  => $request->mapa,

                        'cep'                  => $request->cep,
                       'logradouro'            => $request->rua,
                       'numero'                => $request->numero,
                       'complemento'           => $request->complemento,
                       'bairro'                => $request->bairro,
                       'cidade'                => $request->cidade,
                       'uf'                    => $request->uf,
                       'situacao_imovel'       => $request->situacao_imovel,

                       'banco_investimentos'    => $request->banco_investimentos,
                       'agencia_investimentos'  => $request->agencia_investimentos,
                       'conta_investimentos'    => $request->conta_investimentos,
                       'op_investimentos'       => $request->op_investimentos,

                       'historia'       => $request->historia,
                       'objetivos'      => $request->objetivos,
                       'impactos'       => $request->impactos,
                       'missao'         => $request->missao,
                       'visao'          => $request->visao,
                       'valores'        => $request->valores,
                       'espaco_livre'   => $request->espaco_livre,

                       'user_id'               => $request->user()->id,

                    ]);



                Alert::success('Os dados da Organização foram salvos', 'Sucesso')->persistent('Ok');
                return redirect()->route('osc.create');

            } catch (Throwable $t) {
                Alert::error('Algum Erro ocorreu'.$t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->back()->withInput();
            }
        },2); return $result;
    }

    public function update(Request $request,$id){

        //dd($request->all());
        $result = DB::transaction(function() use ($request,$id) {
            try {
                        $osc = OSC::findOrFail($id);
                        $banco              = $osc->banco();
                        $banco->banco       = $request->banco;
                        $banco->agencia     = $request->agencia;
                        $banco->conta       = $request->conta;
                        $banco->contaDV     = $request->contaDv;
                        $banco->tipo_conta  = 3;
                        $banco->save();

                       $osc->nome_fantasia                  = $request->nome_fantasia;
                       $osc->cnpj                           = $request->cnpj;
                       $osc->ano_inscricao_cnpj             = $request->ano_inscricao_cnpj;
                       $osc->ano_fundacao                   = $request->ano_fundacao;
                       $osc->sigla                          = $request->sigla;
                       $osc->cnae                           = $request->cnae;
                       $osc->cnae_sec                       = $request->cnae_sec;
                       $osc->responsavel_legal              = $request->responsavel_legal;
                       $osc->situacao_imovel_id             = $request->situacao_imovel_id;
                       $osc->email                          = $request->email;
                       $osc->site                           = $request->site;
                       $osc->descricao                      = $request->descricao;
                       $osc->telefone                       = $request->telefone;
                            $osc->cep                       = $request->cep;
                            $osc->logradouro                = $request->logradouro;
                            $osc->numero                    = $request->numero;
                            $osc->complemento               = $request->complemento;
                            $osc->bairro                    = $request->bairro;
                            $osc->cidade                    = $request->cidade;
                            $osc->uf                        = $request->uf;                       
                       $osc->atividades_economicas_id       = $request->atividades_economicas_id;
                       $osc->area_atuacao                   = $request->area_atuacao;
                       $osc->sub_area1                      = $request->sub_area1;
                       $osc->sub_area2                      = $request->sub_area2;
                       $osc->descricao                      = $request->descricao;
                       $osc->surgimento_osc                 = $request->surgimento_osc;
                       $osc->missao_osc                     = $request->missao_osc;
                       $osc->video_institucional            = toEmbeb($request->video_institucional);
                       $osc->fan_page                       = $request->fan_page;
                       $osc->instagram                      = $request->instagram;

                $osc->save();

                Alert::success('Seus dados foram Salvos', 'Sucesso')->persistent('Ok');
                return redirect()->back();
            } catch (Throwable $t) {
                Alert::warning('Não foi possível Salvar seus dados' . $t->getMessage(), 'Erro')->persistent('Ok');
                return redirect()->back();
            }
        },2);
        return $result;
    }

    public function landingPage(){
        if(Auth::user()->osc() == null){

            Alert::warning('Você precisa cadastrar sua Osc Primeiro','Keep Calm')->persistent('Entendi');
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
