<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\Announcement_member;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Alert;

class memberAnnouncementController extends Controller
{
    public function addAnnouncementMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            $users=DB::table('users')
            ->where('userType','=','member')
            ->get();

            return view('Member.addAnnouncement',compact('users'));

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    

    public function allAnnouncementMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement_member::all();

            return view('Member.allAnnouncement',compact('announcements'));
        
        }else{
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function storeAnnouncementMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            $table=new Announcement_member();

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
    public function updateAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement_member::findOrFail($id);

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
    public function showAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        { 
            $users=DB::table('users')
                ->where('userType','=','member')
                ->get();
            
            $announcements=Announcement_member::findOrFail($id);

            return view('Shepherd.showAnnouncement',compact('users','announcements'));

        }else{
            
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteAnnouncementMember($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            $announcements=Announcement_member::findOrFail($id);

            $announcements->delete();

            Alert::success('Eliminado!','O comunicado foi eliminado com sucesso!');

            return redirect()->back();

        }else{

            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
