<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Alert;

class anotherController extends Controller
{
    public function lockScreen(Request $request)
    {
        session(['lock_screen' => true]);

        return redirect()->route('lock');
    }
    public function lock()
    {
        return view('Another.lock-screen');
    }
}
