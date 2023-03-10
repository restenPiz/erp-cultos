<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Cult;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class cultController extends Controller
{
    public function addCult()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('Admin.addCult');   
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistem!');

            return redirect()->route('login');
        }
    }
    public function storeCult()
    {
        if(Auth::user()->hasRoler('admin'))
        {
            $table=new Cult();

            $table->Day_of_cult=Request::input('Day_of_cult');
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
