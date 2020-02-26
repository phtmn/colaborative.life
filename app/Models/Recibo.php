<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    public function investimento()
    {
        return $this->hasOne(Investimento::class);
    }

    public function projeto()
    {
        return $this->hasOne(Recibo::class);
    }
}
