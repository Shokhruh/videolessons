<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LockScreen
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
