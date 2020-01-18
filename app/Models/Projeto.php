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
        'user_id', 'num_pronac', 'telefone', 'cep', 'logradouro', 'bairro', 'cidade',
        'uf', 'banco', 'ag', 'cc', 'comprovante_captacao', 'imagem_projeto', 'cronograma',
        'contrapartidas', 'ativo', 'publicado',
        'tipo_pessoa', 'cpf', 'cnpj', 'responsavel', 'municipio', 'status'
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
