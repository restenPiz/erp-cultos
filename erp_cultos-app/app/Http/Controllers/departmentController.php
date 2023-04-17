<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use App\Models\Branche;
use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Cult;
use App\Models\ReportActivity;
class departmentController extends Controller
{
    public function addDepartment()
    {
        if(Auth::user()->hasRole('admin')){
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
            
            $users=DB::table('users')
                ->where('id','<>',1)
                ->get();

            return view('Admin.addDepartment',compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function allDepartment()
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
            
            $departments=Department::all();

            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            $users=DB::table('users')
                ->where('id','<>',1)
                ->get();

            return view('Admin.allDepartment',compact('departments','users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
        }
        else
        {
            Alert::error('Nao Autenticado','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeDepartment()
    {
        if(Auth::user()->hasRole('admin')){

            foreach(Request::input('Id_user') as $key=>$name)
            {
                $insert=[
                    'Name'=>Request::input('Name'),
                    'Id_user'=>Request::input('Id_user')[$key],
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ];

                DB::table('departments')->insert($insert);
            }
            
            Alert::success('Adicionado!','O departamento foi adicionado com sucesso!');

            return redirect()->route('addDepartment');

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function updateDepartment($id)
    {
        if(Auth::user()->hasRole('admin')){

            foreach(Request::input('Id_user') as $key=>$name)
            {
                $insert=[
                    'Name'=>Request::input('Name'),
                    'Id_user'=>Request::input('Id_user')[$key],
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ];

                DB::table('departments')->insert($insert);
            }

            Alert::success('Actualizado!','O Departamento foi actualizado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function deleteDepartment($id)
    {
        if(Auth::user()->hasRole('admin')){

            $department=Department::findOrFail($id);

            $department->delete();

            Alert::success('Eliminado','O departamento foi eliminado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }

}
