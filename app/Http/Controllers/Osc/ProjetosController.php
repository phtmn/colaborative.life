<?php

namespace App\Http\Controllers\Osc;

use App\Mail\SendFileUser;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProjetoRequest;
use Alert;
use Throwable;


class ProjetosController extends Controller
{
    public function __construct(){
        $this->middleware('can:osc');
    }

    public function index(){
        $osc = auth()->user()->osc();        
        if(!$osc){
            Alert::warning('Você precisa Preencher Perfil','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        //dd($osc);
        return view('osc.projetos.index',[
            'data'  => $osc->projetos()
        ]);
    }

    public function create(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }

        return view('osc.projetos.create');
    }

    public function edit($id){
        $projeto  = Projeto::find($id);
        return view('osc.projetos.edit',[
            'projeto'           => $projeto
           
        ]);
    }

    public function store(Request $request){


        // $projeto = Projeto::UpdateOrCreate(
        //     ['osc_id' => auth()->user()->osc()->id],
        //     [
        //         'nome_projeto'          => $request->nome_projeto,  
        //         'data_dou'              => $request->data_dou,  
        //         'num_pronac'            => $request->num_pronac,  
        //         'segmento'              => $request->segmento,  
        //         'tipo_operacao'         => $request->tipo_operacao,  
        //         'resumo'                => $request->resumo,  
        //         'valor_meta'            => toMoney($request->valor_meta),  
        //         'link_vesalic'          => $request->link_vesalic,  
        //         'banco'                 => 'Banco do Brasil S.A.', 
        //         'banco_ag'              => $request->banco_ag, 
        //         'banco_cc'              => $request->banco_cc, 
        //         'osc_id'                => $request->user()->osc()->id
        //     ]
        // );
       
        $projeto = new Projeto;
        $projeto->nome_projeto        = $request->nome_projeto;
        $projeto->data_dou            = $request->data_dou;
        $projeto->num_pronac          = $request->num_pronac;
        $projeto->segmento            = $request->segmento;
        $projeto->tipo_operacao       = $request->tipo_operacao;
        // $projeto->resumo              = $request->resumo;
        // $projeto->valor_meta          = toMoney($request->valor_meta);
        $projeto->link_vesalic        = $request->link_vesalic;
        $projeto->banco               = 'Banco do Brasil S.A.';
        $projeto->banco_ag            = $request->banco_ag;
        $projeto->banco_cc            = $request->banco_cc;
        $projeto->osc_id              = $request->user()->osc()->id;
        $projeto->save();

        if($projeto){
            Alert::success('Projeto cadastrado com Sucesso','Sucesso')->persistent('Ok');
                return redirect()->route('projetos.index');
        }

        Alert::error('Algum Erro ocorreu'.$t->getMessage(), 'Erro')->persistent('Ok');
        return redirect()->route('projetos.create')->withInput($request->all());

    }

    // public function store(CreateProjetoRequest $request){

    //     $result = DB::transaction(function() use($request){
    //         try{
                
    //             $projeto = Projeto::create([                 
               
    //             'nome_projeto'          => $request->nome_projeto,  
    //             'data_dou'              => $request->data_dou,  
    //             'num_pronac'            => $request->num_pronac,  
    //             'segmento'              => $request->segmento,  
    //             'tipo_operacao'         => $request->tipo_operacao,  
    //             'resumo'                => $request->resumo,  
    //             'valor_meta'            => toMoney($request->valor_meta),  
    //             'link_vesalic'          => $request->link_vesalic,  
    //             'banco'                 => 'Banco do Brasil S.A.', 
    //             'banco_ag'              => $request->banco_ag, 
    //             'banco_cc'              => $request->banco_cc, 
    //             'osc_id'                => $request->user()->osc()->id
    //         ]
    //     );

    //     if($projeto){
    //         Alert::success('Projeto cadastrado com Sucesso','Sucesso')->persistent('Ok');
    //             return redirect()->route('projetos.index');
    //     }

    // }catch (Throwable $t){
    //     Alert::warning( 'A Operação não foi realizada'.$t->getMessage(),'Erro')->persistent('Ok');
    //     return redirect()->route('projetos.create')->withInput($request->all());
    // }

    // },2);

    // return $result;
    // }

    // public function update(Request $request,$id){

    //      $result = DB::transaction(function () use ($request,$id){
    //          try{

    //              $projeto = Projeto::find($id)->Update([

    //                 // 'nome_projeto'        => $request->nome_projeto,
    //                 // 'data_dou'            => $request->data_dou,
    //                 // 'num_pronac'          => $request->num_pronac,
                    // 'segmento'            => $request->segmento,
                    // 'tipo_operacao'       => $request->tipo_operacao,
                    // 'resumo'              => $request->resumo,
                    // 'valor_meta'          => toMoney($request->valor_meta),
                    // 'link_vesalic'        => $request->link_vesalic,
                    // 'banco'               => 'Banco do Brasil S.A.',
                    // 'banco_ag'            => $request->banco_ag,
                    // 'banco_cc'            => $request->banco_cc,
                    

                    //  'nome_projeto'          => $request->nome_projeto,
                    //  'descricao_resumida'    => $request->descricao_resumida,
                    //  'responsavel_projeto'   => $request->responsavel_projeto,
                    //  'valor_projeto'         => toMoney($request->valor_projeto),
                    //  'valor_meta'            => toMoney($request->valor_meta),
                    //  'data_inicio'           => $request->data_inicio,
                    //  'data_final'            => $request->data_final,

                    //  'lei_incentivo'         => $request->lei_incentivo,
                    //  'lei'                   => $request->lei,
                    //  'artigo'                => $request->artigo,
                    //  'ambito'                => $request->ambito,
                    //  'num_registro1'         => $request->num_registro1,
                    //  'num_registro2'         => $request->num_registro2,
                    //  'segmento'              => $request->segmento,

                    //  'resumo'                => $request->resumo,
                    //  'objetivos'             => $request->objetivos,
                    //  'justificativa'         => $request->justificativa,
                    //  'publico_alvo'          => $request->publico_alvo,
                    //  'impactos_esperados'    => $request->impactos_esperados,
                    //  'contra_partidas'       => $request->contra_partidas,

                    //  'prop_nome'             => $request->prop_nome,
                    //  'prop_documento'        => $request->prop_documento,
                    //  'prop_telefone1'        => $request->prop_telefone1,
                    //  'prop_telefone2'        => $request->prop_telefone2,
                    //  'prop_email1'           => $request->prop_email1,
                    //  'prop_email2'           => $request->prop_email2,

                    //  'banco_doacao'          => $request->banco_doacao,
                    //  'agencia_doacao'        => $request->agencia_doacao,
                    //  'conta_doacao'          => $request->conta_doacao,
                    //  'op_doacao'             => $request->op_doacao,

                    //  'banco_patrocinio'      => $request->banco_patrocinio,
                    //  'agencia_patrocinio'    => $request->agencia_patrocinio,
                    //  'conta_patrocinio'      => $request->conta_patrocinio,
                    //  'op_patrocinio'         => $request->op_patrocinio,

                    //  'status'                => 'Enviado',

    //              ]);


    //              if($projeto){
    //                  Alert::success( 'Dados Alterados com Sucesso','Sucesso')->persistent('Ok');
    //                  return redirect()->route('projetos.index');
    //              }

    //          }catch (Throwable $t){
    //              Alert::warning( 'A Operação não foi realizada'.$t->getMessage(),'Erro')->persistent('Ok');
    //              return redirect()->route('projetos.index')->withInput($request->all());
    //          }

    //      },2);
    //      return $result;

    // }

    public function uploadFile(Request $request){

        $projeto = Projeto::find($request->projeto_id);

        $image = $request->file('file');
        $imageName = 'PROJETOFILE-'.$projeto->id.time();
        try{

            if($projeto->arquivo != null) {
                Storage::disk('s3')->delete($projeto->arquivo);
            }

            Storage::disk('s3')->put($imageName, file_get_contents($image),'public');
            $imageNameAWS  = Storage::disk('s3')->url($imageName);

            $projeto->update(['arquivo' => $imageNameAWS ]);
            return redirect()->back();
        }catch (\Exception $e){
            dd($e->getMessage());
            return redirect()->back();
        }
    }



    
}
