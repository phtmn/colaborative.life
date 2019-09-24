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
        $osc = auth()->user()->osc();
        if (!$osc) {
            Alert::warning('Você precisa Preencher Perfil', 'Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }
        //dd($osc);
        return view('osc.projetos.index', [
            'data'  => $osc->projetos()
        ]);
    }

    public function create()
    {
        $osc = auth()->user()->osc();
        if (!$osc) {
            Alert::warning('Você precisa cadastrar sua OSC Primeiro', 'Vish!')->persistent('OK');
            return redirect()->route('osc.create');
        }

        return view('osc.projetos.create');
    }

    public function edit($id)
    {
        $projeto  = Projeto::find($id);
        return view('osc.projetos.edit', [
            'projeto'           => $projeto

        ]);
    }

    public function store(Request $request)
    {
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
        $projeto->ativo               = '0';
        $projeto->osc_id              = $request->user()->osc()->id;
        $projeto->save();

        if ($projeto) {
            Alert::success('Projeto cadastrado com Sucesso', 'Sucesso')->persistent('Ok');
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
