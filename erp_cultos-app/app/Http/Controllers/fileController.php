<?php

namespace App\Http\Controllers;

use Request;
use App\Models\File;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class fileController extends Controller
{
    public function storeFile()
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $table=new File();

            $table->Name_file=Request::input('Name_file');
        }
        else
        {
            Alert::error('Nao Autenticado','Voce nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
