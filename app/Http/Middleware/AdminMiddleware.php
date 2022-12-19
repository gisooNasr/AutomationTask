<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->check() && Auth::user()->is_admin == 1) {
            return $next($request);
        }
        return redirect('/')->with('error','کاربر گرامی شما اجازه دسترسی به این صفحه را ندارید');
    }
}
