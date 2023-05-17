<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use Request;
use App\Models\Input;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use App\Http\Requests\validate;

class inputController extends Controller
{
    public function addInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;
            
            $users=DB::table('users')
                ->where('name','<>','Admin')
                ->get();

            return view('Treasurer.addInput',compact('users','announcements','activities','total'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }    
    public function allInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $users=Input::select('SELECT * FROM inputs WHERE id > 1');
            
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
            $count_announcements=DB::table('announcements')
                ->count();

            $total=$count_activities+$count_announcements;
            
            $inputs=Input::all();

            $count=DB::table('inputs')
                ->sum('Offert_value_confirmation');

            return view('Treasurer.allInput',compact('inputs','users','total','announcements','activities'), ['count'=>$count]);
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            Request::validate([
                'Offert_value' => 'required',
                'Offert_value_confirmation' => 'required',
                'Input_type' => 'required',
                'Description' => 'required',
                'Id_user' => 'required',
                'Day' => 'required',
            ]);

            $input=new Input();

            $input->Offert_value=Request::input('Offert_value');
            $input->Offert_value_confirmation=Request::input('Offert_value_confirmation');
            $input->Input_type=Request::input('Input_type');
            $input->Description=Request::input('Description');
            $input->Id_user=Request::input('Id_user');
            $input->Day=Request::input('Day');

            $user=User::findOrFail(Request::input('Id_user'));
            
            $input->save();
            $user->save();

            Alert::success('Adicionado!','A sua entrada foi adicionada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateInput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            Request::validate([
                'Offert_value' => 'required',
                'Offert_value_confirmation' => 'required',
                'Input_type' => 'required',
                'Description' => 'required',
                'Id_user' => 'required',
                'Day' => 'required',
            ]);
            
            $input=Input::findOrFail($id);

            $input->Offert_value=Request::input('Offert_value');
            $input->Offert_value_confirmation=Request::input('Offert_value_confirmation');
            $input->Input_type=Request::input('Input_type');
            $input->Inpput_type=Request::input('Description');
            $input->Id_user=Request::input('Id_user');
            $input->Day=Request::input('Day');

            $user=User::findOrFail(Request::input('Id_user'));
            
            $input->save();
            $user->save();   

            Alert::success('Actualizado!','A sua entrada foi actualizada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteInput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $input = Input::findOrFail($id);

            $input->delete();
            
            Alert::success('Eliminado!','A sua entrada foi eliminada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function dowloandPdf()
    {
        if(Auth::user()->hasRole('treasurer'))
        {        
            $count=DB::table('inputs')
                ->sum('Offert_value_confirmation');

            $inputs = Input::all();
            $html = '<table class=table align-middle table-nowrap><thead class=table-light><tr><th class="sort">ID</th><th class="sort">Valor</th><th class="sort">Metodo de Pagamento</th><th class="sort">Nome</th><th class="sort">Tipo de Entrada</th><th class="sort">Dia</th></tr></thead><tbody class="list form-check-all">';

            foreach ($inputs as $input) {
                $html .= "<tr><td>{$input->id}</td><td>{$input->Offert_value}</td><td>{$input->Input_type}</td><td>{$input->users->name}</td><td>{$input->Description}</td><td>{$input->Day}</td></tr>";
            }
            $html .= '</tbody></table>'."<br><h4>Valor Total: {$count}</h4>";

            $pdf = PDF::loadHTML($html);
            return $pdf->stream('relatorio_de_entrada.pdf');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function searchInput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $users=Input::select('SELECT * FROM inputs WHERE id > 1');
            
            $announcements=Announcement::all();

            $activities=Activity::all();

            $count_activities=DB::table('activities')
                ->count();
                
            $count_announcements=DB::table('announcements')
                ->count();
 
            $total=$count_activities+$count_announcements;
            
            $Input_type=Request::input('Input_type');
            $Description=Request::input('Description');

            $inputs=Input::where('Input_type',$Input_type)->where('Description',$Description)->get();

            $count=DB::table('inputs')
                ->sum('Offert_value_confirmation');

            return view('Treasurer.allInput',compact('inputs','users','total','announcements','activities'), ['count'=>$count]);
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}