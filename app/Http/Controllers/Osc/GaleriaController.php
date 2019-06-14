<?php

namespace App\Http\Controllers\Osc;

use App\Models\Galeria;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Auth;
use Alert;
use App\Http\Controllers\Controller;
use Storage;
class GaleriaController extends Controller
{
    public function index(){
        $osc = auth()->user()->osc();
        if(!$osc){
            Alert::warning('Você precisa cadastrar sua OSC Primeiro','Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        return view('dashboard.osc.galeria',[
            'osc'           => $osc,
            'galerias'      => Galeria::where('osc_id',Auth::user()->osc()->id)->get(),
            'projetos'      => Projeto::where('osc_id',$osc->id)->get()->pluck('nome','id')

        ]);
    }

    public function create(){
        return view('dashboard.osc.galeria_create',[
            'tab' => 'galeria'
        ]);
    }

    public function store(Request $request){

        $osc = $request->user()->osc()->id;

        $image = $request->file('file');
        $imageName = 'GAOSC-'.$osc.time();

        Storage::disk('s3')->put($imageName, file_get_contents($image),'public');

        $imageNameAWS  = Storage::disk('s3')->url($imageName);

        if($imageNameAWS != null){
            $galeria = new Galeria();
            $galeria->osc_id        = $osc;
            $galeria->legenda       = $request->legenda;
            $galeria->aws_url       = $imageNameAWS;
            $galeria->aws_name      = $imageName;
            $galeria->ativo         = 1;
            $galeria->save();

            return redirect()->route('galeria.index');
        } else{

            return redirect()->route('galeria.index')->with('msg','Erro');
        }
    }

    public function show($id){


        $galeria = Galeria::find($id);

        Storage::disk('s3')->delete($galeria->imageName);

        $galeria->delete();

        return redirect()->route('galeria.index');
    }
}
