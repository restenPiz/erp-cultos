<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Output;
use App\Models\Input;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class outputController extends Controller
{
    public function addOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $users=User::all();
            $inputs=Input::all();

            return view('Treasurer.addOutput', compact('users','inputs'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $table=new Output();
            
            $table->Value=Request::input('Value');
            $table->Description=Request::input('Description');
            $table->Id_user=Request::input('Id_user');
            $table->Id_input=Request::input('Id_input');
            $table->Day=Request::input('Day');

            $user=User::find(Request::input('Id_user'));

            $input=Input::find(Request::input('Id_input'));

            $input->Offert_value_confirmation-=$table->Value;

            $table->save();
            $user->save();
            $input->save();

            Alert::success('Adicionado!','A sua saida foi introduzida com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            return view('Treasurer.allOutput');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {

        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {

        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
