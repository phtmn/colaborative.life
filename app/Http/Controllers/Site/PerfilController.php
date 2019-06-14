<?php

namespace App\Http\Controllers\Site;

use App\Mail\SendFileUser;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;
use Validator;
use Alert;

class PerfilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('site.cadastro.perfil');
    }

    public function store(Request $request){
        
        //para saber o que está vindo do formulário descomentar a linha abaixo linha:20
        //dd($request->all());

        $perfil = new Perfil();
        $perfil->user_id = Auth::user()->id;
        $perfil->nome_completo = $request['nome_completo'];
        $perfil->tipo_perfil = $request['tipo_perfil'];
        $perfil->data_nascimento = $request['data_nascimento'];
        $perfil->telefone_principal = $request['telefone_principal'];
        $perfil->cpf = $request['cpf'];
        $perfil->cnpj = $request['cnpj'];
        $perfil->razao_social = $request['razao_social'];
        $perfil->nome_fantasia = $request['nome_fantasia'];
        $perfil->cep = $request['cep'];
        $perfil->endereco = $request['endereco'];
        $perfil->cidade = $request['cidade'];
        $perfil->estado = $request['estado'];
        $perfil->complemento = $request['complemento'];
        //TODO: inserir os campos relacionado a perfil
        //validação
        $messages = [
            'required'  => 'O campo :attribute é obrigatório', 
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', 
            'max'       => 'A quantidade de caracteres do campo :attribute é maxima', 
            'string'    => 'O campo :attribute não é do tipo texto',
            'unique'    => 'O valor do campo :attribute já está em uso, escolha outro'
        ];

        $validator = Validator::make($request->all(),[  
            'nome_completo'         => 'required|min:10|max:100|string|',
            'data_nascimento'       => 'required|min:8',
            'telefone_principal'    => 'required|min:14|max:15',
            'cpf'                   => 'required|unique|max:11',
            'cnpj'                  => 'required|unique|size:18',
            'razao_social'          => 'required|string|min:4|max:100',
            'nome_fantasia'         => 'required|string|min:4|max:100',
            'cep'                   => 'required|max:8',
            'endereco'              => 'required|min:4|max:100',
            'cidade'                => 'required|min:4|max:100',
            'estado'                => 'required|min:4|max:100',
            'complemento'           => 'required|min:2|max:100'                   
        ],$messages);
        
        //caso alguma regra falhe
        if($validator->fails()){

            return redirect()->back()       // = volta pra pagina anterior
                            ->withErrors($validator) // retorna os erros de validação
                            ->withInput(); // retorna com os campos preenchidos
        }
        
        //grava os dados no banco
        $perfil->save();
        return redirect()->route('site.painel');

    }

    public function update(Request $request){

        try {
            $perfil = $request->all();
    
            $user_id = tabPerfil::findOrFail($id);
            $user_id->update($perfil);
    
            return redirect()->route('site.painel')->with('success','Os dados foram atualizados com sucesso.');
    
        } catch (Exception $ex) {
    
            return redirect('site.painel')->with('error', 'Ocorreu um erro ao tentar atualizar os dados!');
    
        }
    }

    public function sendFile($id){

        $projeto = Projeto::find($id);
        if($projeto->arquivo != null){

            \Mail::to(auth()->user()->email)->send(new SendFileUser($projeto));
            Alert::success( 'Você receberá o aquivo por email')->persistent('Ok');
            return redirect()->back();
        }else{
            Alert::warning( 'Esse projeto nao contem aquivo!')->persistent('Ok');
            return redirect()->back();
        }

    }
}
