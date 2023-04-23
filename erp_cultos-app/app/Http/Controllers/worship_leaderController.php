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

class worship_leaderController extends Controller
{
    public function addWorship_leader(User $user)
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
        
        return view('Admin.addWorship_leader',compact('count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
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

            $user->attachRole('worship_leader');

            Alert::success('Adicionado', 'O lider de louvor foi adicionado com sucesso!');

            return redirect()->back();
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function allWorship_leader()
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
        
        $users = DB::table('users')->where('userType', 'lider_louvor')->get();
        
        $announcements=Announcement::all();
            
        $activities=ReportActivity::all();

        return view('Admin.allWorship_leader',compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));
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

            Alert::success('Actualizado', 'O lider de louvor foi actualizado com sucesso!');

            return redirect()->back();
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

            Alert::success('Eliminado', 'O lider de louvor foi eliminado com sucesso!');
            
            return redirect()->back();
        }
        else
        {
            return redirect()->route('login');
        }
    }
}