<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            return $next($request);
        }

        switch(auth()->user()->tipo_conta) {
            case 'osc': $route = 'osc.index'; break;
            case 'admin': $route = 'admin.index'; break;
            default: $route = 'perfil.index';
        }

        return redirect()->route($route);
    }
}
