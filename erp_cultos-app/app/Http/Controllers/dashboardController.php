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
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            $users=DB::table('users')
                ->where('userType','member')
                ->get();

            return view('Shepherd.Index',compact('users','activities','total'));
        }
        if (Auth::user()->hasRole('worship_leader')) 
        {
            
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            $files = DB::table('files')->where('Type_file', 'Arquivo')->get();
            $images = DB::table('files')->where('Type_file', 'Imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Video')->get();
            $audios = DB::table('files')->where('Type_file', 'Audio')->get();

            return view('Worship_leader.Index', compact('files', 'images', 'videos','audios','announcements','activities','total'));
        }
        if (Auth::user()->hasRole('treasurer')) 
        {
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            return view('Treasurer.Index',compact('announcements','activities','total'));
        }
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            $files = DB::table('files')->where('Type_file', 'Documento')->get();
            $images = DB::table('files')->where('Type_file', 'Imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Video')->get();
            $audios = DB::table('files')->where('Type_file', 'Audio')->get();

            return view('Member.Index', compact('files', 'images', 'videos','audios','announcements','activities','total'));
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
    public function showAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
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

            $announcementss=Announcement::find($id);

            $users = DB::table('users')
            ->where('userType', '=', 'pastor')
            ->get();

            return view('Member.showAnnouncementsMember', compact('users','announcementss','count_branches', 'count_activities', 'count_cults', 'count_shepherds', 'total', 'announcements', 'activities'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function showAnnouncementWorship_leader($id)
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $cults=Cult::all();

            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            $announcementss=Announcement::find($id);

            $users = DB::table('users')
            ->where('userType', '=', 'pastor')
            ->get();

            return view('Worship_leader.showAnnouncementWorship_leader',compact('announcementss','users','cults','announcements','activities','total'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function showAnnouncementTreasurer($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;
            
            $users=DB::table('users')
                ->where('name','<>','Admin')
                ->where('userType', '=', 'pastor')
                ->get();

            $announcementss=Announcement::find($id);

            return view('Treasurer.showAnnouncementTreasurer',compact('announcementss','users','announcements','activities','total'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function ProfileAdmin()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $userss=User::where('userType','admin')->first();

            $users = User::where('userType', '<>', 'admin')->orderBy('name')->get();
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

            return view('Admin.ProfileAdmin', compact('userss','branches', 'users', 'count_branches', 'count_activities', 'count_cults', 'count_shepherds', 'total', 'announcements', 'activities'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateProfileAdmin(Request $request, $id)
    {
        if(Auth::check())
        {
            $user=User::findOrFail($id);

            $user->update([
                'id'=>$request->id,
                'name' => $request->name,
                'email' => $request->email,
                'surname' => $request->surname,
                'function' => $request->function,
                'theological_level' => $request->theological_level,
                'contact' => $request->contact,
                'userType' => $request->userType,
                'gender' => $request->gender,
                'password' => Hash::make($request->password),
            ]);

                
            event(new Registered($user));

            Auth::login($user);
            Alert::success('Actualizado!','Os dados do usuario foram actualizados com sucesso!');

            return redirect()->route('dashboard');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}