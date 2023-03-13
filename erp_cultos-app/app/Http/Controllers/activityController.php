<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class activityController extends Controller
{
    public function addActivity()
    {
        return view('Admin.addActivity');
    }
    public function storeActivity()
    {
        $table=new Activity();

        $table->Hour=Request::input('Hour');
    }
}
