<?php

namespace App\Http\Middleware;

use Closure;
use Atomic\Auth\Exceptions\TokenMismatchException;
use Atomic\Http\Request;

class VerifyCsrfToken
{
    /**
     * Handle an incoming request.
     *
     * @param \Atomic\Http\Request $request
     * @param \Closure $next
     * @return mixed
     *
     * @throws \Illuminate\Session\TokenMismatchException
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->isReading($request) || $this->tokensMatch($request)) {
            return $next($request);
        }

        throw new TokenMismatchException('CSRF token mismatch.');
    }

    /**
     * Determine if the HTTP request uses a 'read' verb.
     *
     * @param  \Atomic\Http\Request  $request
     * @return bool
     */
    protected function isReading(Request $request): bool
    {
        return in_array($request->method(), ['HEAD', 'GET', 'OPTIONS']);
    }

    /**
     * Determine if the session and input CSRF tokens match.
     *
     * @param  \Atomic\Http\Request  $request
     * @return bool
     */
    protected function tokensMatch(Request $request): bool
    {
        $token = $this->getTokenFromRequest($request);

        return wp_verify_nonce($token, '_token') !== false;
    }

    /**
     * Get the CSRF token from the request.
     *
     * @param  \Atomic\Http\Request  $request
     * @return string
     */
    protected function getTokenFromRequest(Request $request): string
    {
        $token = $request->get('_token') ?: $request->header('X-CSRF-TOKEN');

        if (!$token) {
            return '';
        }
    }
}
