<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patrimonyController extends Controller
{
    public function addPatrimony()
    {
        return view('Admin.addPatrimony');
    }
}
