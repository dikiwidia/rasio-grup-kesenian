<?php

namespace Bantenprov\RasioBankDunia\Http\Middleware;

use Closure;

/**
 * The RasioBankDuniaMiddleware class.
 *
 * @package Bantenprov\RasioBankDunia
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioBankDuniaMiddleware
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
        return $next($request);
    }
}
