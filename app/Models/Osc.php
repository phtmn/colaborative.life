<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Osc extends Model
{
    protected $fillable = [
        'user_id','uuid','nome_fantasia','cnpj','ano_fundacao','sigla','cnaes','responsavel','email','telefone','site',
        'facebook','instagram','youtube','video_institucional','mapa','cep','rua','numero','bairro','complemento',
        'cidade','uf','situacao_imovel','banco_investimentos','agencia_investimentos','conta_investimentos','op_investimentos',
        'historia','objetivos','impactos','missao','visao','valores','espaco_livre','logo','ativa'
    ];

    public function projetos(){
        return $this->hasMany(Projeto::class)->get();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function banco(){
        return $this->belongsTo(Banco::class,'banco_id')->first();
    }

    public function metas(){
        return $this->hasMany(Metas_Oscs::class);
    }


}
