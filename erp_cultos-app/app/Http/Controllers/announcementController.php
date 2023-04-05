<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class announcementController extends Controller
{
    public function addAnnouncement()
    {
        if(Auth::user()->hasRole('shepherd'))
        {

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    

    public function storeAnnouncement()
    {
        if(Auth::user()->hasRole('shepherd'))
        {

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateAnnouncement($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function deleteAnnouncement($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
