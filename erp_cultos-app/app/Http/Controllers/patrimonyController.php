<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Patrimony;
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
class patrimonyController extends Controller
{
    public function addPatrimony()
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
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();
            
            return view('Admin.addPatrimony',compact('count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities','announcements','activities'));
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storePatrimony()
    {
        if(Auth::user()->hasRole('admin')){

            Request::validate([
                'Name' => 'required',
                'Quantity' => 'required',
                'Status' => 'required',
            ]);
            
            $table=new Patrimony();

            $table->Name=Request::input('Name');
            $table->Quantity=Request::input('Quantity');
            $table->Status=Request::input('Status');

            $table->save();

            Alert::success('Adicionado','O patrimonio foi adicionado com sucesso!');

            return redirect()->route('allPatrimony');
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allPatrimony()
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
            
            $patrimonys=Patrimony::all();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();
            
            $announcements=Announcement::all();
            
            $activities=ReportActivity::all();

            return view('Admin.allPatrimony',compact('patrimonys','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities','announcements','activities'));    
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updatePatrimony($id)
    {
        if(Auth::user()->hasRole('admin')){
            
            Request::validate([
                'Name' => 'required',
                'Quantity' => 'required',
                'Status' => 'required',
            ]);

            $patrimony=Patrimony::findOrFail($id);
            $patrimony->Name=Request::input('Name');
            $patrimony->Status=Request::input('Status');
            $patrimony->Quantity=Request::input('Quantity');

            $patrimony->save();

            Alert::success('Actualizado','O patrimonio foi actualizado com sucesso!');

            return redirect()->route('allPatrimony');

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            redirect()->route('login');
        }
    }
    public function deletePatrimony($id)
    {
        if(Auth::user()->hasRole('admin')){
            
            $patrimony=Patrimony::findOrFail($id);

            $patrimony->delete();

            Alert::success('Eliminado!','O usuario foi eliminado com sucesso!');

            return redirect()->back();

        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
