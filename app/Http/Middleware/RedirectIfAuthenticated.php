<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($request);
        // if ($request->is('/logout')) {
            if ($guard == "researchers" && Auth::guard($guard)->check()) {
                return redirect()->route('researcher.home');
            }

            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect()->route('admin.index');
            }

            if (Auth::guard($guard)->check()) {
                return redirect()->route('user.home');
            }
        // }

        return $next($request);
    }
}
