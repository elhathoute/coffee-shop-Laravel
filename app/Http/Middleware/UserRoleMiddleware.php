<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\Auth;

use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
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
       if( Auth::check() && Auth::user()->role ==1){
        return $next($request);

       }
    return abort(403,'Error You are not admin Or not login!');

    }
}
