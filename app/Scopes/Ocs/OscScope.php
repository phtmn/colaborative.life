<?php
namespace App\Scopes\Osc;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class OscScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $osc = auth()->user()->osc()->id;
        //dd($osc);
        $builder->where('osc_id',$osc);
    }

}