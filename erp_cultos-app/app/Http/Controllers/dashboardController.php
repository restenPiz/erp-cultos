<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Cult;
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
            //Retornando os dados para se usar nas cards
            $count_branches=Branche::count();
            $count_activities=Activity::count();
            $count_cults=Cult::count();
            $count_shepherds=DB::table('users')
                ->where('userType','pastor')
                ->count();

            $branches = Branche::all();

            $count_announcement=Announcement::count();

            $total=$count_activities+$count_announcement;

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

            return view('Admin.Index',compact('branches', 'users','count_branches','count_activities','count_cults','count_shepherds','total'));
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