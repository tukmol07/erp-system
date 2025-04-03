<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMarketing
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'Marketing') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Unauthorized Access');
    }
}
