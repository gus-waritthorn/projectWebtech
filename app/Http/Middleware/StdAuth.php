<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class StdAuth
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
        if (Auth::user()->role == 'std')
        {
            return $next($request);
        }
        elseif (Auth::user()->role == 'admin')
        {
            return redirect('/');
        }
        return redirect('/login');
    }
}
