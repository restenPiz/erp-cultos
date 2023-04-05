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

            $users=User::all();

            return view('Admin.addDepartment',compact('users'));

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function allDepartment()
    {
        if(Auth::user()->hasRole('admin')){

            $departments=Department::all();

            return view('Admin.allDepartment',compact('departments'));

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function storeDepartment( Request $request)
    {
        if(Auth::user()->hasRole('admin')){

            $departamento = Department::create([
                'Name' => $request->input('Name')
            ]);
            
            $usuariosSelecionados = $request->input('Id_user');
            
            if (!empty($usuariosSelecionados)) {
                $departamento->usuarios()->attach($usuariosSelecionados);
            }
            
            Alert::success('Adicionado!','O departamento foi adicionado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema');
            
            return redirect()->route('login');
        }
    }
    public function updateDepartment($id)
    {
        if(Auth::user()->hasRole('admin')){

            $department=Department::find($id);

            $department->Name=Request::input('Name');
            $department->Id_user=Request::input('Id_user');
            $user=User::find(Request::input('Id_user'));

            $department->save();
            $user->save();

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
