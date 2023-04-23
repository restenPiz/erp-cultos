<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Cult;
use App\Models\ReportActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Branche;

class dashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) 
        {
            //Retornando os dados para se usar nas cards
            $count_branches = Branche::count();
            $count_activities = Activity::count();
            $count_cults = DB::table('cults')
                ->count();
            $count_shepherds = DB::table('users')
                ->where('userType', 'pastor')
                ->count();

            $count_report = ReportActivity::count();

            $count_announcement = Announcement::count();

            $total = $count_report + $count_announcement;

            $branches = Branche::all();

            $announcements = Announcement::all();

            $activities = ReportActivity::all();

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

            return view('Admin.Index', compact('branches', 'users', 'count_branches', 'count_activities', 'count_cults', 'count_shepherds', 'total', 'announcements', 'activities'));
        }
        if (Auth::user()->hasRole('shepherd')) 
        {
            $users=DB::table('users')
                ->where('userType','member')
                ->get();

            return view('Shepherd.Index',compact('users'));
        }
        if (Auth::user()->hasRole('worship_leader')) 
        {
            $files = DB::table('files')->where('Type_file', 'Arquivo')->get();
            $images = DB::table('files')->where('Type_file', 'Imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Video')->get();
            $audios = DB::table('files')->where('Type_file', 'Audio')->get();

            return view('Worship_leader.Index', compact('files', 'images', 'videos','audios'));
        }
        if (Auth::user()->hasRole('treasurer')) 
        {
            return view('Treasurer.Index');
        }
        if(Auth::user()->hasRole('member'))
        {
            $files = DB::table('files')->where('Type_file', 'Documento')->get();
            $images = DB::table('files')->where('Type_file', 'Imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Video')->get();
            $audios = DB::table('files')->where('Type_file', 'Audio')->get();

            return view('Member.Index', compact('files', 'images', 'videos','audios'));
        }
        else
        {
            Alert::error('Erro!','Falha ao tentar acessar ao sistema. Tente novamente');

            return redirect()->back();
        }
    }
    public function showAnnouncement($id)
    {
        if (Auth::user()->hasRole('admin')) {
            
            $announcementss = Announcement::findOrFail($id);
            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

                //Retornando os dados para se usar nas cards
            $count_branches = Branche::count();
            $count_activities = Activity::count();
            $count_cults = DB::table('cults')
                ->count();
            $count_shepherds = DB::table('users')
                ->where('userType', 'pastor')
                ->count();

            $count_report = ReportActivity::count();

            $count_announcement = Announcement::count();

            $total = $count_report + $count_announcement;

            $branches = Branche::all();

            $announcements = Announcement::all();

            $activities = ReportActivity::all();
            return view('Admin.showAnnouncement', compact('users','announcementss','count_branches', 'count_activities', 'count_cults', 'count_shepherds', 'total', 'announcements', 'activities'));

        } else {

            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function autoMember()
    {
        return view('Member.autoMember');
    }
    public function loginMembers()
    {
        return view('Member.login');
    }
}