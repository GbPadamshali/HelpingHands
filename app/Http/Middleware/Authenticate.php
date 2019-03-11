<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        $req = $request->url();
        if (! $request->expectsJson()) {
          if (strripos($req, 'admin') !== false) {
            return '/admin/login';
          } elseif (strripos($req, 'hospital') !== false) {
            return '/hospital/login';
          } else {
            return '/user-login-page';
          }

            // return route('login');
        }
    }
}
