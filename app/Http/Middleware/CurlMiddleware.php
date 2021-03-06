<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CurlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Curl eg header: curl/7.83.1
        $response = $next($request);
        $response->header('Content-Type', 'text/plain; charset=utf-8');

        return $response;
    }
}
