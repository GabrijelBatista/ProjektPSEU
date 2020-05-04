<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
    if ($request->user() && $request->user()->admin != '1')
    {
        abort(403, 'Ne možete pristupiti ovoj lokaciji ukoliko niste admin.');
    }
    return $next($request);
    }


}
