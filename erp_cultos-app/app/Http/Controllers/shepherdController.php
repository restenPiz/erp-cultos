<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shepherdController extends Controller
{
    public function addShepherd()
    {
        return view('Admin.addShepherd');
    }
}
