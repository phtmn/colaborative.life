<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';

    protected $fillable = [
        'user_id',
        'nome_completo',
        'dt_nascimento',
        'genero',
        'cpf_cnpj',
        'telefone',
        'celular',
        'razao_social',
        'nome_fantasia',
        'qtd_funcionarios',
        'faturamento_mensal',
        'cargo',
        'cep',
        'logradouro',
        'numero',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'complemento'];

    public function usuario(){
       return $this->BelongsTo(User::class);
    }

    public function endereco(){
        return $this->belongsTo(Endereco::class)->first();
    }

    public function banco(){
        return $this->belongsTo(Banco::class)->first();
    }
}
