<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class reportActivitiesController extends Controller
{
    public function addReportActivities()
    {
        if(Auth::user()->hasRole('shepherd')){

            $users=DB::table('users')
                ->where('name','=',Auth::user()->name)
                ->get();

            return view('Shepherd.addReportActivities',compact('users'));
        }
        else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allReportActivities()
    {
        if(Auth::user()->hasRole('shepherd')){

            $activities=DB::table('activities')
                ->where('Group','=','Admin')
                ->get();

            $users=DB::table('users')
                ->where('name','=',Auth::user()->name)
                ->get();

            return view('Shepherd.allReportActivities' ,compact('activities'));            
        }
        else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeReportActivities()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $table=new Activity();

            $table->Title=Request::input('Title');
            $table->Hour=Request::input('Hour');
            $table->Day=Request::input('Day');
            $table->Group=Request::input('Group');
            $table->Id_user=Request::input('Id_user');
    
            $user=User::find(Request::input('Id_user'));
    
            $table->save();
            $user->save();
    
            Alert::success('Adicionado!','O seu relatorio de actividades foi adicionado com sucesso!');
    
            return view('Shepherd.addReportActivities');
        }
        else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateReportActivities($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $table=Activity::findOrFail($id);

            $table->Title=Request::input('Title');
            $table->Hour=Request::input('Hour');
            $table->Day=Request::input('Day');
            $table->Group=Request::input('Group');
            $table->Id_user=Request::input('Id_user');

            $user=User::find(Request::input('Id_user'));

            $table->save();
            $user->save();

            Alert::success('Actualizado!','O seu relatorio de actividades foi actualizado com sucesso!');

            return redirect()->route('allReportActivities');
        }
        else
        {
        
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteReportActivities($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $table=Activity::findOrFail($id);
            
            $table->delete();

            Alert::success('Eliminado!','O relatorio de actividades foi eliminado com sucesso!');
            
            return redirect()->route('allReportActivities');
        }
        else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
