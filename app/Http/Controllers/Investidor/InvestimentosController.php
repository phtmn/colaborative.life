<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Investimento;
use App\Models\Projeto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Osc;

class InvestimentosController extends Controller
{
    public function index(){

        $data = Investimento::all();

        return view('investidor.investimentos.index',[
            'data'=> $data
        ]);

    }

    public function lista_oscs(){
        $data = Osc::where('ativa',1)->get();
        return view('investidor.investimentos.lista_oscs',[
            'data' => $data
        ]);
    }

    public function lista_projetos(){
        $data = Projeto::where('publicado',1)->get();
        return view('investidor.investimentos.lista_projetos',[
            'data' => $data
        ]);
    }

    public function detalhe_oscs($id){

        return view('investidor.investimentos.landing_osc',[
            'osc'       => Osc::find($id),
            // 'metas'     => DB::table('metas_oscs')->where('osc_id',$id)->get(),
            // 'metas_p'   => DB::table('metas_oscs')->where('projeto_id','<>',null)
            //                         ->where('osc_id',$id)->get(),
            'galerias'  => DB::table('galerias')->where('osc_id',$id)->get(),
            'projetos'  => DB::table('projetos')->where('osc_id',$id)->get()
        ]);
    }

    public function detalhe_projeto($id){
        $projeto = Projeto::find($id);

        return view('investidor.investimentos.landing_projeto',[
            'projeto'       => Projeto::find($id)
            // 'projetos'  => DB::table('projetos')->where('osc_id',$id)->get()
        ]);
    }

    // public function detalhe_projeto($id){

    //     $projeto = Projeto::find($id);

    //     return response()->json($projeto);

    //    return view('investidor.investimentos.landing_projeto',[
    //        'projeto'   => Projeto::find($id),
    //        'galerias'  => DB::table('galerias')->where('osc_id',$id)->get(),
    //        'dias'      => Carbon::parse($projeto->inicio_captacao)->diffInDays($projeto->fim_captacao)
    //    ]);
    // }

    public function callback(Request $request){

        $investimento = Investimento::find($request->external_reference);
        $novoStatus = null;

        switch ($request->collection_status){
            case 'pending'    : $novoStatus = 'Aguardando Pagamento'; break;
            case 'approved'   : $novoStatus = 'Investimento Realizado'; break;
            case 'failure'    : $novoStatus = 'Investimento não Realizado'; break;            
            case 'in_process' : $novoStatus = 'Em processo de Pagamento'; break;            
        }
        
        $investimento->mp_codigo        = $request->merchant_order_id;
        $investimento->mp_pagamento     = $request->preference_id;
        $investimento->mp_status        = $request->collection_status;
        $investimento->status_interno   = $novoStatus;
        $investimento->forma_pagamento  = $request->payment_type;
        $investimento->save();

        Alert::info('Seu Investimento foi Atualizado!','Genial')->persistent('OK');
        return redirect()->route('investimentos.index');
    }

    public function cancelar($id){
        Investimento::find($id)->update(['status_interno' => 'Cancelado']);
        Investimento::find($id)->delete();

        Alert::warning('Você Cancelou esse investimento','Tenso!')->persistent('Ok');
        return redirect()->back();
    }

    public function detalhe($id){
        $investimento = Investimento::find($id);
        return view('investidor.investimentos.detalhe',compact('investimento'));
    }
}
