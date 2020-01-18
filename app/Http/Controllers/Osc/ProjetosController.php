<?php

namespace App\Http\Controllers\Osc;

use Storage;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use Alert;

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
        $files = [];

        if ($request->hasFile('comprovante_captacao') && $request->file('comprovante_captacao')->isValid()) {
            $fileName = uniqid(date('HisYmd')) . "_-_" . $request->file('comprovante_captacao')->getClientOriginalName();

            $request->comprovante_captacao->move('projetos', $fileName);
            $files['comprovante_captacao']  = $fileName;
          }
                
        if ($request->hasFile('imagem_projeto') && $request->file('imagem_projeto')->isValid()) {
            $fileName = uniqid(date('HisYmd')) . "_-_" . $request->file('imagem_projeto')->getClientOriginalName();

            $request->imagem_projeto->move('projetos', $fileName);
            $files['imagem_projeto']  = $fileName;
          }
        
        if ($request->hasFile('cronograma') && $request->file('cronograma')->isValid()) {
            $fileName = uniqid(date('HisYmd')) . "_-_" . $request->file('cronograma')->getClientOriginalName();

            $request->cronograma->move('projetos', $fileName);
            $files['cronograma']  = $fileName;
          }
      

        if ($request->hasFile('contrapartidas') && $request->file('contrapartidas')->isValid()) {
            $fileName = uniqid(date('HisYmd')) . "_-_" . $request->file('contrapartidas')->getClientOriginalName();

            $request->contrapartidas->move('projetos', $fileName);
            $files['contrapartidas']  = $fileName;
          }

       
        $projeto = new Projeto;
        $projeto->num_pronac            = $request->num_pronac;
        $projeto->telefone              = $request->telefone;
        $projeto->cep                   = $request->cep;
        $projeto->logradouro            = $request->logradouro;
        $projeto->bairro                = $request->bairro;
        $projeto->cidade                = $request->cidade;
        $projeto->uf                    = $request->uf;
        $projeto->banco                 = 'Banco do Brasil S.A.';
        $projeto->ag                    = $request->ag;
        $projeto->cc                    = $request->cc;
        // $projeto->video_youtube         = $request->video_youtube;
        $projeto->comprovante_captacao  = $files['comprovante_captacao'] ?? null;
        $projeto->imagem_projeto        = $files['imagem_projeto'] ?? null;        
        $projeto->cronograma            = $files['cronograma'] ?? null;        
        $projeto->contrapartidas        = $files['contrapartidas'] ?? null;
        
        $projeto->ativo                 = '0';
        $projeto->status                = 'Captação em análise';
        $projeto->user_id               = $request->user()->id;
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

        $projeto->publicado =  !$projeto->publicado;

        if ($projeto->save()) {
            return response()->json(['success' => true], 200);
        }

        return response()->json(['success' => false], 400);
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
            return redirect()->back();
        }
    }
}
