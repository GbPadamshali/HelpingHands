<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Hospital
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
        if (Auth::check() && Auth::User()->type == 'HOSPITAL') {
          return $next($request);
        }
        return redirect('hospital/login')->with('error', 'Access Denied');
    }
}
