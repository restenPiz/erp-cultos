<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class shepherdController extends Controller
{
    public function addShepherd()
    {
        return view('Admin.addShepherd');
    }
    public function storeShepherd(Request $request)
    {       
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

        toast('Usuario adicionado com sucesso!','sucess');

        return redirect()->back();
    }
}
