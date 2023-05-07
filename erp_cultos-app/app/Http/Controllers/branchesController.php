<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\ReportActivity;
use Request;
use App\Models\User;
use App\Models\Branche;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\validate;

class branchesController extends Controller
{
    public function addBranches()
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
            
            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.addBranches', compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado!');

            return redirect()->route('login');
        }
    }
    public function storeBranches()
    {
        if (Auth::user()->hasRole('admin')) 
        {
            Request::validate([
                'Name' => 'required',
                'Creation_year' => 'required',
                'Address' => 'required',
                'Number_of_members' => 'required',
                'Id_user' => 'required',
            ]);

            $table = new Branche();

            $table->Name = Request::input('Name');
            $table->Creation_year = Request::input('Creation_year');
            $table->Address = Request::input('Address');
            $table->Number_of_members = Request::input('Number_of_members');
            $table->Id_user = Request::input('Id_user');

            //Inicio da parte em que encontro a chave estrangeira
            $user = User::find(Request::input('Id_user'));

            //Salvando os dados na base de dados
            $table->save();
            $user->save();

            Alert::success('Adicionado', 'A igreja filha foi adicionada com sucesso.');

            return redirect()->route('allBranches');
        }
        else
        {
            Alert::error('Nao autenticado','O usuario nao esta autenticado!');

            return redirect()->route('login');
        }
    }
    public function allBranches()
    {
        if (Auth::user()->hasRole('admin')) 
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

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allBranches', compact('branches', 'users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
        }
        else
        {
            Alert::error('Nao autenticado','O usuario nao esta autenticado!');

            return redirect()->route('login');
        }
    }
    public function updateBranches($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            Request::validate([
                'Name' => 'required',
                'Creation_year' => 'required',
                'Address' => 'required',
                'Number_of_members' => 'required',
                'Id_user' => 'required',
            ]);

            $table=Branche::findOrFail($id);

            $table->Name=Request::input('Name');
            $table->Address=Request::input('Address');
            $table->Creation_year=Request::input('Creation_year');
            $table->Number_of_members=Request::input('Number_of_members');
            $table->Id_user=Request::input('Id_user');

            $user=User::find(Request::input('Id_user'));

            //Actualizando os dados na base de dados
            $table->save();
            $user->save();

            Alert::success('Actualizado','A igreja filha foi actualizada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado','Usuario nao autenticado');

            return redirect()->route('login');
        }
    }
    public function deleteBranches($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $branche=Branche::findOrFail($id);
        
            $branche->delete();

            Alert::success('Eliminado','A igreja filha foi eliminada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado!');

            return redirect()->route('login');
        }
    }
    public function searchBranche()
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
            
            $creation_year=Request::input('Creation_year');
            $id_user=Request::input('Id_user');

            $branches = Branche::where('Creation_year',$creation_year)->where('Id_user',$id_user)->get();

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allBranches', compact('branches', 'users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}