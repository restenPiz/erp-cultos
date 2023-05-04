<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Branche;
use App\Models\ReportActivity;
use Request;
use App\Models\User;
use App\Models\Announcement_member;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Http\Requests\validate;

class memberAnnouncementController extends Controller
{
    public function addAnnouncementMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;
            $users=DB::table('users')
            ->where('name',Auth::user()->name)
            ->get();

            return view('Member.addAnnouncement',compact('users','total','announcements','activities'));

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    

    public function allAnnouncementMember()
    {
        if(Auth::user()->hasRole('member') || Auth::user()->hasRole('shepherd'))
        {
            $announcements=Announcement_member::all();
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            return view('Member.allAnnouncement',compact('announcements','activities','announcements','total'));
        
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function storeAnnouncementMember()
    {
        if(Auth::user()->hasRole('member'))
        {

            Request::validate([
                'Type' => 'required',
                'Description' => 'required',
                'Hour' => 'required',
                'Id_user' => 'required',
            ]);

            $table=new Announcement_member();

            $table->Type=Request::input('Type');
            $table->Description=Request::input('Description');
            $table->Hour=Request::input('Hour');
            $table->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));

            $table->save();
            $user->save();

            Alert::success('Adicionado!','O comunicado foi adicionado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            Request::validate([
                'Type' => 'required',
                'Description' => 'required',
                'Hour' => 'required',
                'Id_user' => 'required',
            ]);
            
            $announcements=Announcement_member::findOrFail($id);

            $announcements->Type=Request::input('Type');
            $announcements->Description=Request::input('Description');
            $announcements->Hour=Request::input('Hour');
            $announcements->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));

            $announcements->save();
            $user->save();

            Alert::success('Actualizado!','O comunicado foi adicionado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function showAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        { 
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;

            $users=DB::table('users')
                ->where('name',Auth::user()->name)
                ->get();
            
            $announcementss=Announcement_member::findOrFail($id);

            return view('Member.showAnnouncementMember',compact('users','announcementss','total','announcements','activities'));

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement_member::findOrFail($id);

            $announcements->delete();

            Alert::success('Eliminado!','O comunicado foi eliminado com sucesso!');

            return redirect()->back();

        }elseif(Auth::user()->hasRole('shepherd'))
        {
            $announcements=Announcement_member::findOrFail($id);

            $announcements->delete();

            Alert::success('Eliminado!','O comunicado foi eliminado com sucesso!');

            return redirect()->back();            
        }
        else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allReport()
    {
        if( Auth::user()->hasRole('shepherd'))
        {
            $announcements=Announcement_member::all();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('Shepherd.allReport',compact('announcements','activities','total'));
        
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function showReport($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        { 
            $users=DB::table('users')
                ->where('name',Auth::user()->name)
                ->get();
            
            $announcementss=Announcement_member::findOrFail($id);


            return view('Shepherd.showReport',compact('users','announcementss'));

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allReportAdmin()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $announcementss=DB::table('announcement_members')
                ->where('status',0)
                ->get();

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
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allReportAdmin',compact('announcementss','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));   
            
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function showReportAdmin($id)
    {
        if(Auth::user()->hasRole('admin'))
        { 
            $users=DB::table('users')
            ->get();
            
            $announcementss=Announcement_member::findOrFail($id);

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
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.showReportAdmin',compact('users','announcementss','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));   
        

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
