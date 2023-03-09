<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class branchesController extends Controller
{
    public function addBranches()
    {
        $users= User::orderBy('Name', 'asc')->get();

        return view('Admin.addBranches',compact('users'));
    }
}
