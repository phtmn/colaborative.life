<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'dt_nascimento' => 'required|date',
            //'cpf_cnpj'      => 'regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
            'nome_completo' => 'required|min:4|max:150'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'regex'    => 'O :attribute é inválido',
            'min'      => 'O campo :attribute é muito curto',
            'max'      => 'O campo :attribute é muito longo'
        ];
    }


    public function attributes(){
        return [
            'dt_nascimento'             => 'Data de nascimento',
            'cpf_cnpj'                  => 'cpf ou cnpj',
            'nome_completo'             => 'Nome',


        ];
    }

}
