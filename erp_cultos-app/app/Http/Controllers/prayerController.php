<?php

namespace App\Http\Controllers;

use App\Models\Prayer_request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class prayerController extends Controller
{
    public function addPrayer()
    {
        if(Auth::user()->hasRole('member'))
        {
            $users=DB::table('users')
                ->where('name',Auth::user()->name)
                ->get();

            return view ('Member.addPrayerRequest',compact('users'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->back();
        }
    }
    public function allPrayer()
    {
        if(Auth::user()->hasRole('member'))
        {
            $prayers=Prayer_request::all();

            $users=DB::table('users')
            ->where('name',Auth::user()->name)
            ->get();

            return view('Member.allPrayerRequest',compact('users','prayers'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->back();
        }
    }
    public function storePrayer()
    {
        if(Auth::user()->hasRole('member'))
        {
            $table=new Prayer_request();

            $table->Description=Request::input('Description');
            $table->Title=Request::input('Title');
            $table->Date=Request::input('Date');
            $table->Hour=Request::input('Hour');
            $table->Id_user=Request::input('Id_user');

            $users=User::find(Request::input('Id_user'));

            $users->save();
            $table->save();

            Alert::success('Adicionado!','O seu pedido de oracao foi adicionado com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->back();
        }
    }
    public function updatePrayer($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            $table=Prayer_request::find($id);

            $table->Description=Request::input('Description');
            $table->Title=Request::input('Title');
            $table->Date=Request::input('Date');
            $table->Hour=Request::input('Hour');
            $table->Id_user=Request::input('Id_user');

            $users=User::find(Request::input('Id_user'));

            $users->save();
            $table->save();

            Alert::success('Actualizado!','O seu pedido de oracao foi actualizado com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->back();
        }
    }
    public function deletePrayer($id)
    {
        if(Auth::user()->hasRole('member'))
        {
            $table=Prayer_request::find($id);

            $table->delete();

            Alert::success('Eliminado!','O seu pedido de oracao foi eliminado com sucesso!');

            return redirect()->back();
        }
        elseif(Auth::user()->hasRole('shepherd'))
        {
            $table=Prayer_request::find($id);

            $table->delete();

            Alert::success('Eliminado!','O seu pedido de oracao foi eliminado com sucesso!');

            return redirect()->back();    
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->back();
        }
    }

    public function allRequest()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $prayers=Prayer_request::all();

            $users=DB::table('users')
            ->where('name',Auth::user()->name)
            ->get();

            return view('Shepherd.allPrayerRequest',compact('users','prayers'));
        }   
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->back();
        }
    }
}
