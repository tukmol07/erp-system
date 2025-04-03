<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HR
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'HR') {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Unauthorized Access');
    }
}
