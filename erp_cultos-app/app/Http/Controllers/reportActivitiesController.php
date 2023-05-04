<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Request;
use App\Models\User;
use App\Models\ReportActivity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use stdClass;
use App\Http\Requests\validate;

class reportActivitiesController extends Controller
{
    public function addReportActivities()
    {
        if (Auth::user()->hasRole('shepherd')) {

            $users = DB::table('users')
                ->where('name', '=', Auth::user()->name)
                ->get();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('Shepherd.addReportActivities', compact('users','activities','total'));
        } else {

            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allReportActivities()
    {
        if (Auth::user()->hasRole('shepherd')) {

            $users = User::where('name', Auth::user()->name)->first();

            $activitie=ReportActivity::all();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('Shepherd.allReportActivities', compact('activitie','activities', 'users','total'));

        } else {

            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeReportActivities()
    {
        if (Auth::user()->hasRole('shepherd')) {

            Request::validate([
                'Title' => 'required',
                'Id_user' => 'required',
                'Day' => 'required',
                'Hour' => 'required',
            ]);

            $table = new ReportActivity();

            $table->Title = Request::input('Title');
            $table->Hour = Request::input('Hour');
            $table->Day = Request::input('Day');
            $table->Id_user = Request::input('Id_user');

            $user = User::find(Request::input('Id_user'));

            $table->save();
            $user->save();

            Alert::success('Adicionado!', 'O seu relatorio de actividades foi adicionado com sucesso!');

            return redirect()->back();
        } else {

            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateReportActivities($id)
    {
        if (Auth::user()->hasRole('shepherd')) {

            Request::validate([
                'Title' => 'required',
                'Id_user' => 'required',
                'Date' => 'required',
                'Hour' => 'required',
            ]);
            
            $table = ReportActivity::findOrFail($id);

            $table->Title = Request::input('Title');
            $table->Hour = Request::input('Hour');
            $table->Day = Request::input('Day');
            $table->Id_user = Request::input('Id_user');

            $user = User::find(Request::input('Id_user'));

            $table->save();
            $user->save();

            Alert::success('Actualizado!', 'O seu relatorio de actividades foi actualizado com sucesso!');

            return redirect()->route('allReportActivities');
        } else {

            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteReportActivities($id)
    {
        if (Auth::user()->hasRole('shepherd')) {
            $table = ReportActivity::findOrFail($id);

            $table->delete();

            Alert::success('Eliminado!', 'O relatorio de actividades foi eliminado com sucesso!');

            return redirect()->route('allReportActivities');
        } else {
            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}