<?php

namespace App\Http\Middleware;

use Closure;

class AddAuthenticateHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->bearerToken()) {
            if ($request->hasCookie('_token')) {
                $token = $request->cookie('_token');
                $request->headers->add(['Authorization' => 'Bearer ' . $token]);
            }
        }
        return $next($request);
    }
}
