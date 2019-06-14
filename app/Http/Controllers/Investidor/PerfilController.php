<?php

namespace App\Http\Controllers\Investidor;


use App\Http\Requests\PerfilRequestValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Auth;
use Alert;

class PerfilController extends Controller
{

    public function index(){

       return view('investidor.perfil.index');
    }

    public function perfil(){
        
        $perfil = auth()->user()->perfil()->first();
        //dd($perfil);
        if($perfil){
            return view('investidor.perfil.edit',compact('perfil'));
        }
            return view('investidor.perfil.create');
    }

    public function update(PerfilRequestValidation $request){

        $perfil = Perfil::updateOrCreate(
            ['user_id' => auth()->user()->id ],
            [
                'nome_completo'     => $request->nome_completo,
                'dt_nascimento'     => $request->dt_nascimento,
                'genero'            => $request->genero,
                'cpf_cnpj'          => $request->cpf_cnpj,
                'razao_social'      => $request->razao_social,
                'nome_fantasia'     => $request->nome_fantasia,
                'qtd_funcionarios'  => $request->qtd_funcionarios,
                'faturamento_mensal'=> $request->faturamento_mensal,
                'cargo'             => $request->cargo,
                'cep'               => $request->cep,
                'logradouro'        => $request->logradouro,
                'numero'            => $request->numero,
                'complemento'       => $request->complemento,
                'bairro'            => $request->bairro,
                'cidade'            => $request->cidade,
                'uf'                => $request->uf,
                'telefone'          => $request->telefone,
                'celular'           => $request->celular,
                'user_id'           => auth()->user()->id
            ]);

        if($perfil){
            Alert::success( 'Seus dados foram Salvos','Sucesso')->persistent('Ok');
            return redirect()->route('perfil.index');
        }
        Alert::warning( 'Não foi possível Salvar seus dados','Erro')->persistent('Ok');
            return redirect()->route('perfil.index');
    }
}
