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
            return view('proponente.bemvindo');
        }
        return view('proponente.bemvindo');
    }

    // public function index(){

    //     $osc = auth()->user()->osc();
    //     if($osc){
    //         return view('proponente.painel',[
    //             'osc'            => $osc,
    //             'projetos'       => $osc->projetos()->count(),                
    //             'investimentos'  => DB::table('investimentos')->where('osc_id',$osc->id)->sum('valor'),
    //             'investimentos_p'=> DB::table('investimentos')->where('projeto_id','<>',null)
    //                                     ->where('osc_id',$osc->id)->sum('valor'),
    //         ]);
    //     }
    //     return view('proponente.bemvindo');
    // }

    public function create(){
        $osc = OSC::where('user_id',Auth::user()->id)->first();
        if($osc){
            return view('proponente.perfil.edit',[
                'osc'           => $osc,  
            ]);
        }
        return view('proponente.perfil.create');
    }

    public function store(Request $request){

        //dd($request->all());
        $osc = OSC::UpdateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'num_doc'         => $request->num_doc,                                       
                'telefone'        => $request->telefone,   
                'user_id'         => auth()->user()->id
            ]
        );

        if($osc){
            Alert::success('Dados salvos com sucesso!')->persistent('Ok');            
                return redirect()->route('osc.create');
        }

        Alert::error('Algum Erro ocorreu'.$t->getMessage(), 'Erro')->persistent('Ok');
        return redirect()->back()->withInput();
    }
    
}
