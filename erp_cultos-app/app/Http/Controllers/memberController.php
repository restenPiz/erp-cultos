<?php

namespace App\Http\Controllers;

use App\Models\User;
use Request;
use Alert;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class memberController extends Controller
{
    public function loginMember()
    {   
        $user = User::create( 
            [
            'name'=>Request::input('name'),
            'email'=>Request::input('email'),
            'password'=>Request::input('password'),
            'number_bi'=>Request::input('number_bi'),
            'profission'=>Request::input('profission'),
            'baptism'=>Request::input('baptism'),
            'time_of_church'=>Request::input('time_of_church'),
            'affiliation'=>Request::input('affiliation'),
            'gender'=>Request::input('gender'),
            'household'=>Request::input('household'),
            'date_of_birth'=>Request::input('date_of_birth'),
            'marital_status'=>Request::input('marital_status'),
            'surname'=>Request::input('surname'),
            'function'=>Request::input('function'),
            'theological_level'=>Request::input('theological_level'),
            'contact'=>Request::input('contact'),
            'userType'=>Request::input('userType'),
        ]);
        
        if(Request::file('file') != null) {
            $filename = Request::file('file')->getClientOriginalName();
            $link = "Ficheiros/" . $filename;
            $user->file = $link;
            $foto = Request::file('File');
            $foto->move('Ficheiros', $filename);
        }

        $user->attachRole('member');

        event(new Registered($user));

        Auth::login($user);

        Alert::success('Adicionado!','O membro foi adicionaod com sucesso!');

        return redirect()->back();
    }
}
