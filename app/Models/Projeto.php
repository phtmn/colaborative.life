<?php

namespace App\Models;

use App\Scopes\Osc\OscScope;
use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 
        'num_pronac', 
        'telefone', 
        'cep', 
        'logradouro', 
        'bairro', 
        'cidade',
        'uf', 
        'banco', 
        'ag', 
        'cc', 
        'comprovante_captacao', 
        'imagem_projeto', 
        'cronograma',
        'contrapartidas', 
        'ativo', 
        'publicado',
        'tipo_pessoa', 
        'cpf', 
        'cnpj',
        'nome',         
        'responsavel', 
        'cpf-or-cnpj',
        'segmento',
        'area',
        'mecanismo',
        'enquadramento',
        'municipio',
        'uf_projeto',
        'ano_projeto',
        'data_termino',
        'data_inicio',
        'valor_proposta',
        'valor_aprovado',
        'valor_solicitado',
        'outras_fontes',
        'valor_captado',
        'valor_projeto', 
        'resumo',
        'etapa',
        'objetivos',
        'sinopse',
        'justificativa',
        'ficha_tecnica',
        'especificacao_tecnica',
        'impacto_ambiental',
        'democratizacao',
        'acessibilidade',
        'status'
    ];

    protected $dates = ['data_dou'];

    protected $casts = ['publicado' => 'boolean'];

    public function osc() {
        return $this->belongsTo(Osc::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
