<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $token = Auth::user()->remember_token;
            if ($token) {
                if (Auth::check() && (Auth::user()->user_type == 'admin')) {
                    return $next($request);
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect('/logout');
            }
        } else {
            abort(404);
        }
    }
}
