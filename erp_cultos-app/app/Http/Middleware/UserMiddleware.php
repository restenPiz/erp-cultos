<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Http\RedirectResponse;

class UserMiddleware
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
        if(Auth::check() && Auth::user()->status)
        {
            $banned=Auth::user()->status=="1";
            Auth::logout();

            if($banned==1)
            {
                Alert::error('Bloqueado!','Sua conta foi bloqueada, por favor contacte o administrador');
            }

            Alert::error('Bloqueado!','Sua conta foi bloqueada, por favor contacte o administrador');
            return redirect()->route('login');       
        }
        return $next($request);
    }
}
