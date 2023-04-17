<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Branche;
use App\Models\ReportActivity;
use Request;
use App\Models\Cult;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class cultController extends Controller
{
    public function addCult()
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
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.addCult',compact('count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));   
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistem!');

            return redirect()->route('login');
        }
    }
    public function storeCult()
    {
        if(Auth::user()->hasRole('admin'))
        {
            
            $table=new Cult();

            $table->Day_of_cult=Request::input('Day_of_cult');
            $table->Name_cult=Request::input('Name_cult');
            $table->Hour=Request::input('Hour');
            $table->Duration=Request::input('Duration');
            $table->Leader=Request::input('Leader');
            $table->Preacher=Request::input('Preacher');
            $table->Title=Request::input('Title');
            $table->Book=Request::input('Book');
            $table->Chapter=Request::input('Chapter');
            $table->Verse=Request::input('Verse');
            $table->Description=Request::input('Description');

            $table->save();

            Alert::success('Adicionado','O culto foi adicionado com sucesso!');

            return redirect()->route('allCult');
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allCult()
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
            
            $cults=Cult::all();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allCult',compact('cults','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateCult($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $cult=Cult::findOrFail($id);

            $cult->Day_of_cult=Request::input('Day_of_cult');
            $cult->Name_cult=Request::input('Name_cult');
            $cult->Hour=Request::input('Hour');
            $cult->Duration=Request::input('Duration');
            $cult->Leader=Request::input('Leader');
            $cult->Preacher=Request::input('Preacher');
            $cult->Title=Request::input('Title');
            $cult->Book=Request::input('Book');
            $cult->Chapter=Request::input('Chapter');
            $cult->Verse=Request::input('Verse');
            $cult->Description=Request::input('Description');

            $cult->save();

            Alert::success('Actualizado','O culto foi actualizado com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteCult($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $cult=Cult::findOrFail($id);

            $cult->delete();

            Alert::success('Eliminado','O culto foi eliminao com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
