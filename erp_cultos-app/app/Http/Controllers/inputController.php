<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Input;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class inputController extends Controller
{
    public function addInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            return view('Treasurer.addInput');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    
    public function allInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $inputs=Input::all();

            return view('Treasurer.allInput',compact('inputs'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $input=new Input();

            $input->Offert_value=Request::input('Offert_value');
            $input->Input_type=Request::input('Input_type');
            $input->Inpput_type=Request::input('Description');
            $input->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));
            
            $input->save();
            $user->save();

            Alert::success('Adicionado!','A sua entrada foi adicionada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateInput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $input=Input::findOrFail($id);

            $input->Offert_value=Request::input('Offert_value');
            $input->Input_type=Request::input('Input_type');
            $input->Inpput_type=Request::input('Description');
            $input->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));
            
            $input->save();
            $user->save();   

            Alert::success('Actualizado!','A sua entrada foi actualizada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteInput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $input = Input::findOrFail($id);

            $input->delete();
            
            Alert::success('Eliminado!','A sua entrada foi eliminada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}