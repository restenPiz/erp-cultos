<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin']);
    }
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('Admin.Index');
        }else{
            return 404;
        }
    }
}