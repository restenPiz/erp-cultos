<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Request;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\validate;
class announcementController extends Controller
{
    public function addAnnouncement()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $users=DB::table('users')
            ->where('name',Auth::user()->name)
            ->get();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('shepherd.addAnnouncement',compact('users','activities','total'));

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    

    public function allAnnouncement()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $announcements=Announcement::all();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('Shepherd.allAnnouncement',compact('announcements','activities','total'));
        
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function storeAnnouncement()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            //Inicio do metodo para validar os campos
            Request::validate([
                'Type' => 'required',
                'Description' => 'required',
                'Hour' => 'required',
                'Id_user' => 'required',
            ]);

            $table=new Announcement();

            $table->Type=Request::input('Type');
            $table->Description=Request::input('Description');
            $table->Hour=Request::input('Hour');
            $table->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));

            $table->save();
            $user->save();

            Alert::success('Adicionado!','O comunicado foi adicionado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateAnnouncement($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            //Inicio do metodo para validar os campos
            Request::validate([
                'Type' => 'required',
                'Description' => 'required',
                'Hour' => 'required',
                'Id_user' => 'required',
            ]);

            $announcements=Announcement::findOrFail($id);

            $announcements->Type=Request::input('Type');
            $announcements->Description=Request::input('Description');
            $announcements->Hour=Request::input('Hour');
            $announcements->Id_user=Request::input('Id_user');

            $user=User::findOrFail(Request::input('Id_user'));

            $announcements->save();
            $user->save();

            Alert::success('Actualizado!','O comunicado foi adicionado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function showAnnouncement($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        { 
            $users=DB::table('users')
                ->where('name',Auth::user()->name)
                ->get();
            
            $announcements=Announcement::findOrFail($id);

            return view('Shepherd.showAnnouncement',compact('users','announcements'));

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteAnnouncement($id)
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $announcements=Announcement::findOrFail($id);

            $announcements->delete();

            Alert::success('Eliminado!','O comunicado foi eliminado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
