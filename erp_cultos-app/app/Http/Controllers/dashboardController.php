<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
        
        }
        else if(Auth::user()->hasRole('shepherd'))
        {

        }
        else if(Auth::user()->hasRole('worship_leader'))
        {
            
        }
        else if(Auth::user()->hasRole('Member'))
        {
            
        }
        else if(Auth::user()->hasRole('treasurer'))
        {
            
        }
        else{
            return redirect()->back();
        }
    }
}
