<?php

namespace Farmacia\Http\Middleware;

use Closure;

class Quimico
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
        if ((auth()->user()->tipoperfil) == 1) {
            return $next($request);
        }
        return redirect('/login');
    }
}
