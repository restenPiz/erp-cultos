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

class departmentController extends Controller
{
    public function addDepartment()
    {
        if(Auth::user()->hasRole('admin')){

            $departments=DB::table('departments')
                ->distinct()
                ->select('id', 'Name')
                ->get();
            
            $users=User::all();

            return view('Admin.addDepartment',compact('users','departments'));

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
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
