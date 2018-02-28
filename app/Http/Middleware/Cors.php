<?php

/**

CORS stands for Cross-Origin Resource Sharing, which is a mechanism that allows
modern browsers to send and receive restricted data (images, fonts, files, etc.) from
a domain other than the one that made the request.
Simply put, if we don't enable CORS, we can't access our API from other
applications.
**/

namespace App\Http\Middleware;

use Closure;

class Cors
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
    return $next($request)
        
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

    }
        
}
