<?php

namespace App\Http\Controllers\Osc;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class DocumentosController extends Controller
{
    public function index(){


        return view('osc.documentos.index',[
            'data' => Documento::where('osc_id', auth()->user()->osc()->id)
        ]);
    }

    public function store(Request $request){

        $osc = $request->user()->osc()->id;

        $image = $request->file('file');
        $imageName = 'DOCOSC-'.$osc.time();

        Storage::disk('s3')->put($imageName, file_get_contents($image),'public');

        $imageNameAWS  = Storage::disk('s3')->url($imageName);

        if($imageNameAWS != null){
            $documento = new Documento();
            $documento->osc_id        = $osc;
            $documento->projeto_id    = isset($request->projeto_id) ? $request->projeto_id : null;
            $documento->nome          = $request->nome;
            $documento->descricao     = $request->descricao;
            $documento->tipo          = $request->tipo;
            $documento->aws_url       = $imageNameAWS;
            $documento->aws_name      = $imageName;
            $documento->save();

            return redirect()->route('documentos.index');
        } else{

            return redirect()->route('documentos.index')->with('msg','Erro');
        }
    }

    public function destroy(){

    }
}
