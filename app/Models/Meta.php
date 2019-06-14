<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    //


    public function objetivo(){
        return $this->belongsTo(Objetivo::class,'objetivo_id');
    }
}
