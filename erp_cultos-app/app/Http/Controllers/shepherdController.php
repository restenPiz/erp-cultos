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
use App\Models\Branche;
use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Cult;
use App\Models\ReportActivity;
use App\Http\Requests\validate;

class shepherdController extends Controller
{
    public function addShepherd(User $user)
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

        return view('Admin.addShepherd',compact('count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
    }
    public function storeShepherd(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
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
            
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'surname' => 'required',
                'function' => 'required',
                'theological_level' => 'required',
                'contact' => 'required',
                'userType' => 'required',
                'password' => 'required',
                'gender' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'surname' => $request->surname,
                'function' => $request->function,
                'theological_level' => $request->theological_level,
                'contact' => $request->contact,
                'userType' => $request->userType,
                'gender' => $request->gender,
                'password' => Hash::make($request->password),
            ]);

            $user->attachRole('shepherd');

            Alert::success('Adicionado', 'O pastor foi adicionado com sucesso!');

            return redirect()->back();
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function allShepherd()
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
        
        $users = DB::table('users')->where('userType', 'pastor')->get();

        return view('Admin.allShepherd',compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
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
            $user->gender=$request->gender;
            $user->theological_level=$request->theological_level;

            $user->save();

            Alert::success('Actualizado', 'O pastor foi actualizado com sucesso!');

            return redirect()->back();
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
            
            return redirect()->back();
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function searchShepherd(Request $request)
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
            
            $theological_level=$request->input('theological_level');

            $users = User::where('theological_level',$theological_level)->where('userType', 'pastor')->get();

            return view('Admin.allShepherd',compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));

        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}