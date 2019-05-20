<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if ($role == "QuanLy") {
            if ($user->IsQuanLy()) {
                return $next($request);
            } else {
                return redirect('login');
            }
        }

        if ($role == "ThuNgan") {
            if ($user->IsThuNgan()) {
                return $next($request);
            } else {
                return redirect('login');
            }
        }
		if ($role == "QuanLyVaThuNgan") {
            if ($user->IsThuNgan()||$user->IsQuanLy()) {
                return $next($request);
            } else {
                return redirect('login');
            }
        }
        return $next($request);
    }
}
