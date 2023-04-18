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
use Illuminate\Support\Facades\File;
class memberController extends Controller
{
    public function loginMember()
    {
        $table=new User();

        $table->name=Request::input('name');
        $table->email=Request::input('email');
        $table->password=Request::input('password');
        $table->number_bi=Request::input('number_bi');
        $table->profission=Request::input('profission');
        $table->baptism=Request::input('baptism');
        $table->time_of_church=Request::input('time_of_church');
        $table->affiliation=Request::input('affiliation');
        $table->gender=Request::input('gender');
        $table->household=Request::input('household');
        $table->date_of_birth=Request::input('date_of_birth');
        $table->marital_status=Request::input('marital_status');
        $table->surname=Request::input('surname');
        $table->function=Request::input('function');
        $table->theological_level=Request::input('theological_level');
        $table->contact=Request::input('contact');
        $table->userType=Request::input('userType');

        if (Request::file('File') != null) {
            $filename = Request::file('File')->getClientOriginalName();
            $link = "Ficheiros/" . $filename;
            $table->File = $link;
            $foto = Request::file('File');
            $foto->move('Ficheiros', $filename);
        }

        $table->save();

        $table->attachRole('admin');

        event(new Registered($table));

        Auth::login($table);

        Alert::success('Adicionado!','O membro foi adicionaod com sucesso!');

        return redirect()->back();
    }
    public function dashboardMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            return view('Member.Index');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
