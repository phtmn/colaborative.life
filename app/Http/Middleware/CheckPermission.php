<?php

namespace App\Http\Middleware;
use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        return (in_array(auth()->user()->tipo_conta, $roles))
            ? $next($request)
            : redirect()->route('login');
    }
}
