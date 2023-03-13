<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activityController extends Controller
{
    public function addActivity()
    {
        return view('Admin.addActivity');
    }
}
