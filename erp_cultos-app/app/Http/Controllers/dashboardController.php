<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Cult;
use App\Models\ReportActivity;
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
            $count_cults=DB::table('cults')
            ->count();
            $count_shepherds=DB::table('users')
                ->where('userType','pastor')
                ->count();
            
            $count_report=ReportActivity::count();

            $count_announcement=Announcement::count();

            $total=$count_report+$count_announcement;
            
            $branches = Branche::all();

            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

            return view('Admin.Index',compact('branches', 'users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
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
    public function showAnnouncement($id)
    {
        if(Auth::user()->hasRole('admin'))
        { 
            $users=DB::table('users')
                ->where('userType','=','pastor')
                ->get();
            
            $announcements=Announcement::findOrFail($id);

            return view('Admin.showAnnouncement',compact('users','announcements'));

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}