<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Branche;
use App\Models\ReportActivity;
use Request;
use App\Models\User;
use App\Models\Activity;
use App\Models\Department;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\validate;

class activityController extends Controller
{
    public function addActivity()
    {
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('shepherd')) {
            //Usando as query builds para retornar os dados do usuario

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
            
            $users = DB::table('users')
                ->where('userType', '<>', 'admin')
                ->get();

            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

            $departments=DB::table('departments')
                ->get();

            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();
    
            return view('Admin.addActivity',compact('users','departments','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));

        } else {

            Alert::error('Nao autenticado!', 'O usuario nao esta autenticado. Faca o login!');
        
            return redirect()->route('login');
        
        }
    }
    public function storeActivity()
    {
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('shepherd')) {

            //Inicio do metodo para validar os campos
            Request::validate([
                'Hour' => 'required',
                'Title' => 'required',
                'Day' => 'required',
                'Group' => 'required',
                'Id_user' => 'required',
            ]);

            $table = new Activity();

            $table->Hour = Request::input('Hour');
            $table->Title = Request::input('Title');
            $table->Day = Request::input('Day');
            $table->Group = Request::input('Group');
            $table->Id_user = Request::input('Id_user');

            $users = User::find(Request::input('Id_user'));
            $departments=Department::find(Request::input('Group'));

            //Salvando os dados capturados
            $table->save();
            $users->save();
            $departments->save();

            Alert::success('Adicionado com sucesso', 'A actividade foi adicionada com sucesso!');

            return redirect()->route('allActivity');
        } else {
            Alert::error('Nao autenticado!', 'O usuario nao esta autenticado. Faca o Login!');

            return redirect()->route('login');
        }

    }
    public function allActivity()
    {
        if (Auth::user()->hasRole('admin')) {
            
            $pesquisas=DB::table('activities')
                ->where('Title','like','%'.Request::input('search').'%')
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
            
            $users = DB::table('users')
                ->where('userType', '<>', 'admin')
                ->get();
            
            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

            $departments=DB::table('departments')
                ->get();        

            $activitie=Activity::all();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allActivity', compact('pesquisas','activitie','users','departments','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));

        }else {
            Alert::error('Nao autenticado!', 'Voce nao esta autenticado no sistema!');
            return redirect()->route('login');
        }
    }
    public function addActivityShepherd()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $users = DB::table('users')
            ->where('userType', '<>', 'admin')
            ->get();

            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

            $departments=DB::table('departments')
                ->get();

            $activities=Activity::all();

            $total=DB::table('activities')
            ->count();

            return view('Shepherd.addActivity',compact('users','total','departments','activities'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allActivityShepherd()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $users = DB::table('users')
            ->where('userType', '<>', 'admin')
            ->get();

            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

            $departments=DB::table('departments')
                ->get();

            $activities=Activity::all();

            $total=DB::table('activities')
            ->count();

            $activitie=Activity::all();
            
            return view('Shepherd.allActivity',compact('users','total','departments','activities','activitie'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateActivity($id)
    {
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('shepherd')) {

            //Inicio do metodo para validar os campos de input
            Request::validate([
                'Hour' => 'required',
                'Title' => 'required',
                'Day' => 'required',
                'Group' => 'required',
                'Id_user' => 'required',
            ]);

            $activities = Activity::findOrFail($id);

            $activities->Hour = Request::input('Hour');
            $activities->Title = Request::input('Title');
            $activities->Day = Request::input('Day');
            $activities->Group = Request::input('Group');
            $activities->Id_user = Request::input('Id_user');

            $user = User::findOrFail(Request::input('Id_user'));
            $departments=Department::find(Request::input('Group'));

            //Inicio dos metodos que salvam os dados na base de dados
            $activities->save();
            $user->save();
            $departments->save();

            Alert::success('Actualizado', 'A actividade foi actualizada com sucesso!');

            return redirect()->route('allActivity');

        } else {
            Alert::error('Nao autenticado', 'O usuario nao esta autenticado no sistema. Faca login!');

            return redirect()->route('login');
        }
    }
    public function deleteActivity($id)
    {
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('shepherd')) 
        {
            $activity = Activity::findOrFail($id);
            
            $activity->delete();
 
            Alert::success('Eliminado','A actividade foi eliminada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function searchActivity()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $department=Request::input('Group');

            //Retornando os dados de pesquisa
            $activitie=Activity::where('Group',$department)->get();

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
            
            $users = DB::table('users')
                ->where('userType', '<>', 'admin')
                ->get();
            
            $users = DB::table('users')
                ->where('userType', '=', 'pastor')
                ->get();

            $departments=DB::table('departments')
                ->get();        

            $depart=Request::input('Department');
            $day=Request::input('Group');
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allActivity', compact('activitie','users','departments','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));           
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}