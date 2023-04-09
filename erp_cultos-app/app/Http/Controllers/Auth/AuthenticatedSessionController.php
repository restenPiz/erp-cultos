<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Alert;
class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if(!$request){
            Alert::error('Falha!','Falha ao fazer login');
        }

        Alert::success('Bem Vindo!');

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    /*protected function authenticate(Request $request,$user)
    {
    if($user->hasRole('admin')){
    return redirect()->route('dashboard');
    }
    else if($user->hasRole('shepherd'))
    {
    return redirect()->route('dashShepherd');
    }
    }*/
    public function destroy(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        Alert::warning('Logout Concluido',);

        return redirect('/');
    }
}