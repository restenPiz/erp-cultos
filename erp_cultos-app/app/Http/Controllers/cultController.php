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
            $table->Hour=Request::input('Hour');
            $table->Duration=Request::input('Duration');
            $table->Leader=Request::input('Leader');
            $table->Preacher=Request::input('Preacher');
            $table->Title=Request::input('Title');
            $table->Book=Request::input('Book');
            $table->Chapter=Request::input('Chapter');
            $table->Verse=Request::input('Verse');
            $table->Duration=Request::input('Duration');

            $table->save();

            Alert::success('Adicionado','O culto foi adicionado com sucesso!');

            return redirect()->route('allCult');
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
