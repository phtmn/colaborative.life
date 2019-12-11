<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    public function index(){
        return view('admin.projetos.index',[
            'data' => Projeto::paginate(10)
        ]);
    }

    public function show($id){
        return view('admin.projetos.show', [
            'projeto' => Projeto::find($id)
        ]);
    }

    public function active($id){
        if(Projeto::findOrFail($id)->update(['ativo'=>1])){
            return redirect()->back()->with('msg','Projeto Ativado!');
        }
    }

    public function update(Request $request, $id) {
        $projeto = Projeto::findOrFail($id);
        $data = $request->all();

        if (!isset($data['status'])) {
            $data['status'] = 'Aprovado para Captação';
        }

        if (!$projeto) {
            return redirect()->route('admin-projetos.index')->with('error','Projeto não encontrado!');
        }

        if (!$projeto->update($data)) {
            return redirect()->route('admin-projetos.index')->with('error','Erro inesperado!');
        }

        return redirect()->route('admin-projetos.index')->with('msg','Projeto atualizado!');
    }
}
