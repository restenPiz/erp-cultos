<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class treasurerController extends Controller
{
    public function addTreasurer()
    {
        return view('addTreasurer');
    }
    public function storeTreasurer(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'surname' => $request->surname,
                'function' => $request->function,
                'theological_level' => $request->theological_level,
                'contact' => $request->contact,
                'userType' => $request->userType,
                'password' => Hash::make($request->password),
            ]);

            $user->attachRole('shepherd');

            Alert::success('Adicionado', 'O pastor foi adicionado com sucesso!');

            return redirect()->route('addShepherd');
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function allShepherd()
    {
        $users = DB::table('users')->where('userType', 'pastor')->get();

        return view('Admin.allShepherd',compact('users'));
    }
    public function updateShepherd($id, Request $request)
    {
        if (Auth::user()->hasRole('admin')) {

            $user=User::findOrFail($id);

            $user->name=$request->name;
            $user->email=$request->email;
            $user->surname=$request->surname;
            $user->contact=$request->contact;
            $user->function=$request->function;
            $user->theological_level=$request->theological_level;

            $user->save();

            Alert::success('Actualizado', 'O pastor foi actualizado com sucesso!');

            return redirect()->route('allShepherd');
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function deleteShepherd($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $user=User::findOrFail($id);

            $user->delete();

            Alert::success('Eliminado', 'O pastor foi eliminado com sucesso!');
            
            return redirect()->route('allShepherd');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
