<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Patrimony;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class patrimonyController extends Controller
{
    public function addPatrimony()
    {
        if(Auth::user()->hasRole('admin')){
            return view('Admin.addPatrimony');
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storePatrimony()
    {
        if(Auth::user()->hasRole('admin')){
            $table=new Patrimony();

            $table->Name=Request::input('Name');
            $table->Quantity=Request::input('Quantity');
            $table->Status=Request::input('Status');

            $table->save();

            Alert::success('Adicionado','O patrimonio foi adicionado com sucesso!');

            return redirect()->route('allPatrimony');
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allPatrimony()
    {
        if(Auth::user()->hasRole('admin')){
            $patrimonys=Patrimony::all();

            return view('Admin.allPatrimony',compact('patrimonys'));    
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updatePatrimony($id)
    {
        if(Auth::user()->hasRole('admin')){

            $patrimony=Patrimony::findOrFail($id);
            $patrimony->Name=Request::input('Name');
            $patrimony->Status=Request::input('Status');
            $patrimony->Quantity=Request::input('Quantity');

            $patrimony->save();

            Alert::success('Actualizado','O patrimonio foi actualizado com sucesso!');

            return redirect()->back();

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            redirect()->route('login');
        }
    }
    public function deletePatrimony($id)
    {
        if(Auth::user()->hasRole('admin')){
            
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
