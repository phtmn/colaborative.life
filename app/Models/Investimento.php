<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investimento extends Model
{
    use SoftDeletes;

    protected  $fillable = ['status','forma_pgto','mp_codigo','mp_pagamento'];

    public function usuario(){
        return $this->belongsTo(User::class,'user_id')->first();
    }

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function projeto(){
        return $this->belongsTo(Projeto::class, 'projeto_id');
    }

    public function recibo()
    {
        return $this->hasOne(Recibo::class);
    }

    public function jsonSerialize()
    {
        return [
            'id'            => $this->id,
            'comprovante'   => $this->comprovante_transferencia,
            'investidor'    => $this->usuario()->name
        ];
    }
}
