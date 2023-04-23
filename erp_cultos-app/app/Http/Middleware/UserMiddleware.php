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
        if(auth()->check() && (auth()->user()->status == 0)){

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Alert::error('Bloqueado!','Sua conta foi suspensa. Entre em contacto com o administrador!');

            return redirect()->route('login')->with('Error', 'Sua conta foi suspensa. Entre em contacto com o administrador!');
        }
        return $next($request);
    }
}
