<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
Use Validator;
use Alert;


class FeedbackController extends Controller
{
  
    

    public function create(){

        return view('site.feedback');
    }

    public function store(Request $request){
        
        
        $feedback = new Feedback();
        $feedback->nome =   $request['nome'];
        $feedback->email =  $request['email'];
        $feedback->telefone  = $request['telefone'];
        $feedback->categoria = $request['categoria'];
        $feedback->mensagem  = $request['mensagem'];
       
        
        $messages = [
            'required'  => 'O campo :attribute é obrigatório', 
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', 
            'max'       => 'A quantidade de caracteres do campo :attribute é maxima', 
            'string'    => 'O campo :attribute não é do tipo texto'
            
        ];

        $validator = Validator::make($request->all(),[  
            'nome'                  => 'required|min:10|max:100|string|',
            'email'                 => 'required|min:8',
            'categoria'             => 'required',
            'mensagem'              => 'required|min:3'
                             
        ],$messages);
        
        //caso alguma regra falhe
        if($validator->fails()){

            return redirect()->back()       // = volta pra pagina anterior
                            ->withErrors($validator) // retorna os erros de validação
                            ->withInput(); // retorna com os campos preenchidos
        }
        
        //grava os dados no banco
         $feedback->save();
            Alert::success('Obrigado por seu FeedBack','OBG')->persistent('ok');
         return redirect()->route('site.index');
        
    }
}    
