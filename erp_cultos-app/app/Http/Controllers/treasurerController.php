<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class treasurerController extends Controller
{
    public function addTreasurer()
    {
        return view('addTreasurer');
    }
}
