<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $config = config('cors');

        $allowedOrigins = $config['allowed_origins'];
        $allowedMethods = $config['allowed_methods'];
        $allowedHeaders = $config['allowed_headers'];

        $response->headers->set('Access-Control-Allow-Origin', implode(', ', $allowedOrigins));
        $response->headers->set('Access-Control-Allow-Methods', implode(', ', $allowedMethods));
        $response->headers->set('Access-Control-Allow-Headers', implode(', ', $allowedHeaders));

        return $response;
    }
}

