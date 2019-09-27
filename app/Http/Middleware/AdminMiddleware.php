<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->role_id == '1')
            return $next($request);

        else return redirect('/403');
    }
}
