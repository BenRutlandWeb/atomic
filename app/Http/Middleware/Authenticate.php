<?php

namespace App\Http\Middleware;

use Closure;
use Atomic\Auth\Exceptions\AuthenticationException;
use Atomic\Http\Request;

class Authenticate
{
    /**
     * Authenticate a request
     *
     * @param \Atomic\Http\Request $request
     * @param \Closure $next
     * @return mixed
     *
     * @throws \Atomic\Auth\Exceptions\AuthenticationException
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            return $next($request);
        }

        throw new AuthenticationException('Unauthorised');
    }
}
