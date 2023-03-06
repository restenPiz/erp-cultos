<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class shepherdController extends Controller
{
    public function addShepherd()
    {
        return view('Admin.addShepherd');
    }
    public function storeShepherd(Request $request)
    {       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'function' => ['required', 'string', 'max:255'],
            'theological_level' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'usertype' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'surname' => $request->surname,
            'function' => $request->function,
            'theological_level' => $request->theological_level,
            'contact' => $request->contact,
            'userType' => $request->userType,
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole('shepherd');

        event(new Registered($user));

        Auth::login($user);

        return redirect()->back();
    }
}
