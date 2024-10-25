<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status == 0) {
            Auth::logout();
            return redirect('/login')->withErrors([
                'status' => 'Sizning profilingiz bloklangan. Iltimos, administrator bilan bog‘laning.',
            ]);
        }
        return $next($request);
    }
}
