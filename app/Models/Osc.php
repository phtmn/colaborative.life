<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Osc extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'user_id','uuid','cnpj','email','telefone','site',
        'facebook','instagram','mapa','cep','logradouro','numero','bairro',
        'cidade','uf','objetivos','logo','ativa'
=======
        'user_id','uuid','nome','numdoc','telefone','cep','rua','bairro','numero','cidade','uf','site','facebook','instagram','ativa'
>>>>>>> 5d615c93c4ae25eab8bfc02009a9ef45659b2332
    ];

    // protected $fillable = [
    //     'user_id','uuid','nome_fantasia','cnpj','ano_fundacao','sigla','cnaes','responsavel','email','telefone','site',
    //     'facebook','instagram','youtube','video_institucional','mapa','cep','rua','numero','bairro','complemento',
    //     'cidade','uf','situacao_imovel','banco_investimentos','agencia_investimentos','conta_investimentos','op_investimentos',
    //     'historia','objetivos','impactos','missao','visao','valores','espaco_livre','logo','ativa'
    // ];

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
