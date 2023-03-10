<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cultController extends Controller
{
    public function addCult()
    {
        if(Auth::user()->hasRole('admin'))
        {
            
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistem!');
            
            return redirect()->route('login');
        }
    }
}
