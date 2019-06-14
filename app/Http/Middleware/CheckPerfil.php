<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckPerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return (auth()->user()->tipo_conta <> 'osc')
            ? $next($request)
            : redirect()->route('osc.index');

    }
}
