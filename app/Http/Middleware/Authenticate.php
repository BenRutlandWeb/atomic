<?php

namespace App\Http\Middleware;

use Closure;
use Atomic\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            return $next($request);
        }
        return '401: Unauthorised';
    }
}
