<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class branchesController extends Controller
{
    public function addBranches()
    {
        return view('Admin.addBranches');
    }
}
