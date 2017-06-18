<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $level = Session::get('level');
        $user = Auth::user();

        if (
            !$level
            ||
            $level != 'admin'
            ||
            !!$user
        ) {
            return redirect(route('admin.login'))->withErrors(['Silahkan Login Terlebih Dahulu']);
        }

        return $next($request);
    }
}
