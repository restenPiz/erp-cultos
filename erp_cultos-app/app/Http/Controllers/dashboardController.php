<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('Admin.Index');
        }
        else if(Auth::user()->hasRole('shepherd')){
            return 404;
        }
    }
}
