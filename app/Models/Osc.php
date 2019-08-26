<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Osc extends Model
{
    

    protected $fillable = [
        'user_id','uuid','num_doc','telefone','cep','logradouro','bairro','cidade','uf','logo','ativa'
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
