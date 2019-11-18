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
    public function __construct()
    {
        $this->middleware('can:osc');
    }

    public function index()
    {
        return view('proponente.projetos.index', [
            'data' => $data = Projeto::all()
          ]);
    }

    public function create()
    {
        return view('proponente.projetos.create');
    }

    public function edit($id)
    {
        $projeto  = Projeto::find($id);
        return view('proponente.projetos.edit', [
            'projeto'           => $projeto
        ]);
    }

    public function store(Request $request)    
    {
        
        $projeto = new Projeto;        
        $projeto->num_pronac          = $request->num_pronac;
        $projeto->telefone            = $request->telefone;
        $projeto->cep                 = $request->cep;        
        $projeto->logradouro          = $request->logradouro;
        $projeto->bairro              = $request->bairro;
        $projeto->cidade              = $request->cidade;
        $projeto->uf                  = $request->uf;
        $projeto->banco               = 'Banco do Brasil S.A.';
        $projeto->ag                  = $request->ag;
        $projeto->cc                  = $request->cc;
        $projeto->imagem_projeto      = $request->imagem_projeto;
        $projeto->ativo               = '0';
        $projeto->user_id             = $request->user()->id;
        $projeto->save();
        
        if ($projeto) {
            Alert::success('Dados salvos com sucesso!')->persistent('Ok');
            return redirect()->route('projetos.index');
        }

        Alert::error('Algum Erro ocorreu' . $t->getMessage(), 'Erro')->persistent('Ok');
        return redirect()->route('projetos.create')->withInput($request->all());
    }

    
    public function publicate($id)
    {
        $projeto = Projeto::find($id);

        if ($projeto->publicado == 0) {
            $projeto->publicado = 1;
        } else {
            $projeto->publicado = 0;
        }

        if ($projeto->save()) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false
            ], 400);
        }
    }

    public function uploadFile(Request $request)
    {

        $projeto = Projeto::find($request->projeto_id);

        $image = $request->file('file');
        $imageName = 'PROJETOFILE-' . $projeto->id . time();
        try {

            if ($projeto->arquivo != null) {
                Storage::disk('s3')->delete($projeto->arquivo);
            }

            Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
            $imageNameAWS  = Storage::disk('s3')->url($imageName);

            $projeto->update(['arquivo' => $imageNameAWS]);
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back();
        }
    }
}
