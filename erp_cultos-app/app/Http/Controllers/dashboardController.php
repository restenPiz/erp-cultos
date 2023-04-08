<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Branche;

class dashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $branches = Branche::all();

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

            return view('Admin.Index',compact('branches', 'users'));
        }
        if(Auth::user()->hasRole('shepherd'))
        {
            return view('Shepherd.Index');
        }
        if(Auth::user()->hasRole('worship_leader'))
        {
            $files = DB::table('files')->where('Type_file', 'Arquivo_arquivo')->get();
            $images = DB::table('files')->where('Type_file', 'Arquivo_imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Arquivo_video')->get();

            return view('Worship_leader.Index', compact('files','images','videos'));
        }
        if(Auth::user()->hasRole('treasurer'))
        {
            return view('Treasurer.Index');
        }
    }
}