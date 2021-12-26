<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
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
                if (Auth::check() && (Auth::user()->user_type == 'customer')) {
                    return $next($request);
                } else {
                    session(['link' => url()->current()]);
                    return redirect()->route('user.login');
                }
            } else {
                return redirect()->route('customer.logout');
            }
        } else {
            return redirect()->back();
        }

    }
}
