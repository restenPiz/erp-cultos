<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Branche;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class branchesController extends Controller
{
    public function addBranches()
    {
        $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

        return view('Admin.addBranches', compact('users'));
    }
    public function storeBranches()
    {
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

        return redirect()->route('Admin.allBranche');
    }
    public function allBranche()
    {
        if (Auth::user()->hasRole('admin')) 
        {
            $branches = Branche::all();

            $users = User::where('name', '<>', 'admin')->orderBy('name')->get();

            return view('Admin.allBranches', compact('branches', 'users'));
        }
        else
        {
            return redirect()->route('login');
        }
    }
}