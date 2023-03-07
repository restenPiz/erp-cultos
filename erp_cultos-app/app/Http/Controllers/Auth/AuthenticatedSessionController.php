<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(LoginRequest $request, $user)
    {
        //$request->authenticate();
        if(Auth::user()->hasRole('admin')){
            return redirect()->route('dashboard');
        }
        else if(Auth::user()->hasRole('shepherd'))
        {
            return redirect()->route('dashShepherd');
        }

        $request->session()->regenerate();

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

        return redirect('/');
    }
}
