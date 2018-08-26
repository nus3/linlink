<?php

namespace App\Http\Middleware;

use Closure;

class UserTrackCookie
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
        $response = $next($request);

        if (!$request->cookie('LINLINK_SESSION_ID')) {
            $sessionId = session()->getId();
            $response->cookie('LINLINK_SESSION_ID', $sessionId, 60 * 24);
        }

        return $response;
    }
}
