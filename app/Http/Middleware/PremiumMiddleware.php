<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class PremiumMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guest()) {
            return redirect('login');
        }

        if (\Auth::user()->role_id != '3')
            return $next($request);

        else return redirect('/403');
    }
}
