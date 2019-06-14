<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 17/01/2019
 * Time: 22:43
 */

namespace App\Scopes\User;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class UserScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $user = auth()->user()->id;
        //dd($user);
        $builder->where('user_id',$user);
    }

}