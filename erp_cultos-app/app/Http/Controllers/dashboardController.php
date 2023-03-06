<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            return view('Admin.Index');
        }
        else if(Auth::user()->hasRole('shepherd'))
        {
            return 404;
        }
        else if(Auth::user()->hasRole('worship_leader'))
        {
            return 404;
        }
        else if(Auth::user()->hasRole('Member'))
        {
            return 404;
        }
        else if(Auth::user()->hasRole('treasurer'))
        {
            return 404;
        }
        else{
            return redirect()->back();
        }
    }
}
