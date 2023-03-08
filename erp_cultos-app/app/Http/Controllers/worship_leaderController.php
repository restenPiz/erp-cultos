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

class worship_leaderController extends Controller
{
    public function addWorship_leader(User $user)
    {
        return view('Admin.addWorship_leader');
    }
    public function storeWorship_leader(Request $request)
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

            $user->attachRole('Worship_leader');

            Alert::success('Adicionado', 'O pastor foi adicionado com sucesso!');

            return redirect()->route('addWorship_leader');
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function allWorship_leader()
    {
        $users = DB::table('users')->where('userType', 'pastor')->get();

        return view('Admin.allWorship_leader',compact('users'));
    }
    public function updateWorship_leader($id, Request $request)
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

            return redirect()->route('allWorship_leader');
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function deleteWorship_leader($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $user=User::findOrFail($id);

            $user->delete();

            Alert::success('Eliminado', 'O pastor foi eliminado com sucesso!');
            
            return redirect()->route('allWorship_leader');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}