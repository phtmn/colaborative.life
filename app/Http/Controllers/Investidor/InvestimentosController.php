<?php

namespace App\Http\Controllers\Investidor;

use App\Models\Investimento;
use App\Models\Projeto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\Osc;

class InvestimentosController extends Controller
{
    public function index(){
        $user = auth()->user();

        return view('investidor.investimentos.index',[
            'investimentos'=> $user->investimentos()->orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function lista_oscs(){
        $data = Osc::where('ativa',1)->get();
        return view('investidor.investimentos.lista_oscs',[
            'data' => $data
        ]);
    }

    public function lista_projetos(Request $request){
        $query =  Projeto::where('publicado',1)->where('status', 'Aprovado para Captação');
        $parametersInUrl = $request->query();
        $filterInUrl = Arr::has($parametersInUrl, 'query') ? $parametersInUrl["query"] : null;

        if ($filterInUrl) {
            $query->where(function ($queryLocal) use ($filterInUrl) {
                $queryLocal->where('nome', 'like', "%$filterInUrl%")
                    ->orWhere('num_pronac', 'like', "%$filterInUrl%")
                    ->orWhere('proponente_responsavel', 'like', "%$filterInUrl%");
            });
        }

        return view('investidor.investimentos.lista_projetos',[
            'projetos' => $query->paginate(15)
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

    public function detalhe_projeto($num_pronac){
        $projeto = Projeto::where('num_pronac', $num_pronac)->first();

        if (!$projeto) {
            abort(404);
        }

        if (!$projeto->publicado) {
            abort(404);
        }


        if ($projeto->status != 'Aprovado para Captação' AND $projeto->status != 'Captação Finalizada') {
            abort(404);
        }

        return view('investidor.investimentos.landing_projeto',[
            'projeto' => $projeto
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

    public function store(Request $request)
    {

        if ($request->hasFile('comprovante_tranferencia') && $request->file('comprovante_tranferencia')->isValid()) {
            $comprovante = uniqid(date('HisYmd')) . "_-_" . $request->file('comprovante_tranferencia')->getClientOriginalName();

            $request->comprovante_tranferencia->move('investimentos', $comprovante);

            $investimento = new Investimento;
            $investimento->user_id = auth()->user()->id;
            $investimento->projeto_id = $request->projeto_id;
            $investimento->comprovante_transferencia = $comprovante;
            $investimento->valor = 0;
            $investimento->save();

            if ($investimento) {
                Alert::success('Dados salvos com sucesso!')->persistent('Ok');
                return redirect()->route('investimentos.index');
            }

            Alert::error('Algum Erro ocorreu' . $t->getMessage(), 'Erro')->persistent('Ok');
            return redirect()->route('projetos.create')->withInput($request->all());
        }
    }
}
