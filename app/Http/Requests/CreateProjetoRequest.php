<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjetoRequest extends FormRequest
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
            'nome_projeto'          => 'required|min:5|max:100|string',
            'descricao_resumida'    => 'required|min:10|max:250',
            'responsavel_projeto'   => 'required|min:3|max:50',
            'prop_nome'             => 'required',
            //'prop_documento'        => 'required|integer',
            'resumo'                => 'required|max:500',
            'objetivos'             => 'required|max:500',
            'justificativa'         => 'required|max:500',
            'publico_alvo'          => 'required|max:500',
            'impactos_esperados'    => 'required|max:500',
            'contra_partidas'       => 'required|max:500',

        ];
    }

    public function messages(){
        return [
            'required' => 'Preencha este campo!',
            'min'      => 'O campo é muito curto',
            'max'      => 'O campo é muito longo',
        ];
    }
}
