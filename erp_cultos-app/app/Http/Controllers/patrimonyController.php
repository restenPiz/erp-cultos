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
        return view('Admin.addPatrimony');
    }
    public function storePatrimony()
    {
        $table=new Patrimony();

        $table->Name=Request::input('Name');
        $table->Quantity=Request::input('Quantity');
        $table->Status=Request::input('Status');

        $table->save();

        Alert::success('Adicionado','O patrimonio foi adicionado com sucesso!');

        return redirect()->route('allPatrimony');
    }
    public function allPatrimony()
    {
        $patrimonys=Patrimony::all();
        
        return view('Admin.allPatrimony',compact('patrimonys'));
    }
}
