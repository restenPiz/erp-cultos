<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class activityController extends Controller
{
    public function addActivity()
    {
        if(Auth::user()->hasRole('admin')){
            return view('Admin.addActivity');
        }else{
            Alert::error('Nao autenticado!','O usuario nao esta autenticado. Faca o login!');
            return redirect()->route('login');
        }
    }
    public function storeActivity()
    {
        if (Auth::user()->hasRole('admin')) {
            $table = new Activity();

            $table->Hour = Request::input('Hour');
            $table->Title = Request::input('Title');
            $table->Day = Request::input('Day');
            $table->Group = Request::input('Group');
            $table->Id_user = Request::input('Id_user');

            $users = User::find(Request::input('Id_user'));

            //Salvando os dados capturados
            $table->save();
            $users->save();

            Alert::success('Adicionado com sucesso', 'A actividade foi adicionada com sucesso!');

            return redirect()->route('allActivity');
        }else{
            Alert::error('Nao autenticado!','O usuario nao esta autenticado. Faca o Login!');

            return redirect()->route('login');
        }

    }
    public function allActivity()
    {
        if (Auth::user()->hasRole('admin')) {
            $activitys = Activity::all();

            return view('Admin.allActivity', compact('activitys'));
        } else {
            Alert::error('Nao autenticado!', 'Voce nao esta autenticado no sistema!');
            return redirect()->route('login');
        }
    }
    public function updateActivity($id)
    {
        if(Auth::user()->hasRole('Admin')){
            
            $activities=Activity::findOrFail($id);

            $activities->Hour=Request::input('Hour');
            $activities->Title=Request::input('Title');

        }else{
            Alert::error('Nao autenticado','O usuario nao esta autenticado no sistema. Faca login!');

            return redirect()->route('login');
        }
    }
}