<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Input;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class inputController extends Controller
{
    public function addInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            return view('Treasurer.addInput');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    
    public function allInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $inputs=Input::all();

            return view('Treasurer.allInput',compact('inputs'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $input=new Input();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateInput()
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
    public function deleteInput()
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