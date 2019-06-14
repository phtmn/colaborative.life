<?php

namespace App\Http\Controllers\Admin;

use App\Models\Investimento;
use App\Http\Controllers\Controller;

class InvestimentosController extends Controller
{
    public function index(){
        $data = Investimento::withoutGlobalScopes()->get();
        return view('admin.investimentos.index',[
            'data'      => $data
        ]);
    }

    public function show($id){
        $investimento = Investimento::withoutGlobalScopes()->find($id);
        return view('admin.investimentos.show',compact('investimento'));
    }
}
