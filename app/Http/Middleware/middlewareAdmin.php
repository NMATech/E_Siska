<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class middlewareAdmin
{
    public function handle($request, Closure $next)
    {
        if (session('is_admin')) {
            return $next($request);
        }

        return redirect()->route('admin.login')->with('error', 'You are not authorized to access this area.');
    }
}
