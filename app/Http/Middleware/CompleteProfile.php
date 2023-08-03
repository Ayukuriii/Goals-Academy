<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompleteProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * Middleware ini digunakan untuk pengecekan apakah profile user
         * telah dilengkapi atau tidak. jika belum maka akan diarahkan
         * ke rute lengkapi-profile.
         */
        if ($request->user() && $request->user()->is_completed == 0) {
            return redirect()->route('get_lengkapi_profile');
        }
        return $next($request);
    }
}
