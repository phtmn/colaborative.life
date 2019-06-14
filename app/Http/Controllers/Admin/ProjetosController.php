<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    public function index(){

        $data = Projeto::paginate(10);
        return view('admin.projetos.index',[
            'data' => $data
        ]);
    }

    public function show($id){
        $projeto = Projeto::find($id);

        return view('admin.projetos.show',compact('projeto'));
    }

    public function active($id){

        $projeto = Projeto::findOrFail($id)->update(['ativo'=>1]);
        if($projeto){
            return redirect()->back()->with('msg','Projeto Ativado!');
        }
    }
}
