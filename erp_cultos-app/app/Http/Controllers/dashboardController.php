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
        if(Auth::user()->hasRole('shepherd'))
        {
            return view('Shepherd.Index');
        }
        if(Auth::user()->hasRole('worship_leader'))
        {
            return view('Worship_leader.Index');
        }
    }
}