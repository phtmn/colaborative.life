<?php

namespace App\Http\Controllers\Osc;

use App\Models\Metas_Oscs;
use App\Models\Meta;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alert;


class MetasController extends Controller
{
    public function metas($ods = null){
        $osc = auth()->user()->osc();        
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        $metas      = Meta::where('objetivo_id',$ods)->get();
        $metas_osc  = Metas_Oscs::where('osc_id',$osc->id)->get();
        $projetos   = Projeto::where('osc_id',$osc->id)->pluck('nome_projeto','id');

        return view('dashboard.osc.odsform',[
            'metas'         => $metas,
            'metas_osc'     => $metas_osc,
            'projetos'      => $projetos,
        ]);
    }

    public function gravar(Request $request){


        $metas = DB::table('metas')->whereIn('id',$request->codigos)->get();

        foreach ($metas as $meta){

            Metas_Oscs::forceCreate([
                'osc_id'        => $request->user()->osc()->id,
                'meta_id'       => $meta->id,
                'objetivo_id'   => $meta->objetivo_id,
                'projeto_id'    => $request->opcao == 'PROJETO' ? $request->projeto_id : null,
                'meta_codigo'   => $meta->codigo,
                'meta_descricao'=> $meta->descricao
            ]);
        }

        Alert::success('Metas Definidas com Sucessco','Uau!!')->persistent('Ok');
        return redirect()->back();

    }

    public function removerMeta($id){

        $osc_id = auth()->user()->osc()->id;
        $meta   = Metas_Oscs::findOrFail($id)->where('osc_id',$osc_id)->first();
        $meta->delete();
        if($meta){
            Alert::warning('Você removeu esta Meta','Poxa :(')->persistent('OK');
            return redirect()->back();
        }else{
            Alert::error('Não foi possível remover essa meta','Opa')->persistent('OK');
            return redirect()->back();
        }

    }
}
