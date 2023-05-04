<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use App\Models\Announcement_member;
use App\Models\Branche;
use App\Models\Prayer_request;
use App\Models\ReportActivity;
use App\Models\User;
use Request;
use Alert;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validate;
class memberController extends Controller
{
    public function loginMember()
    {
        Request::validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'number_bi' => 'required',
            'profission' => 'required',
            'baptism' => 'required',
            'time_of_church' => 'required',
            'affiliation' => 'required',
            'gender' => 'required',
            'household' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'surname' => 'required',
            'function' => 'required',
            'theological_level' => 'required',
            'contact' => 'required',
            'userType' => 'required',
            'File' => 'required',
        ]);

        $table=new User();

        $table->name=Request::input('name');
        $table->email=Request::input('email');
        $table->password=Hash::make(Request::input('password'));
        $table->number_bi=Request::input('number_bi');
        $table->profission=Request::input('profission');
        $table->baptism=Request::input('baptism');
        $table->time_of_church=Request::input('time_of_church');
        $table->affiliation=Request::input('affiliation');
        $table->gender=Request::input('gender');
        $table->household=Request::input('household');
        $table->date_of_birth=Request::input('date_of_birth');
        $table->marital_status=Request::input('marital_status');
        $table->surname=Request::input('surname');
        $table->function=Request::input('function');
        $table->theological_level=Request::input('theological_level');
        $table->contact=Request::input('contact');
        $table->userType=Request::input('userType');

        if (Request::file('File') != null) {
            $filename = Request::file('File')->getClientOriginalName();
            $link = "Ficheiros/" . $filename;
            $table->File = $link;
            $foto = Request::file('File');
            $foto->move('Ficheiros', $filename);
        }

        $table->save();

        $table->attachRole('member');

        event(new Registered($table));

        Auth::login($table);

        Alert::success('Adicionado!','O membro foi adicionado com sucesso!');

        return redirect()->back();
    }
    public function dashboardMember()
    {
        if(Auth::user()->hasRole('member'))
        {
            return view('Member.Index');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allMember()
    {
        if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('shepherd'))
        {
            
            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();
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

            $users=DB::table('users')
            ->where('userType','member')
            ->get();

            //Retorna a view de todos membros
            return view('Admin.allMember',compact('activities','users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));            
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');
            
            return redirect()->route('login');
        }
    }
    public function allMemberShepherd()
    {
        if(Auth::user()->hasRole('shepherd'))
        {
            $users=DB::table('users')
            ->where('userType','member')
            ->get();

            $activities=Activity::all();

            $total=DB::table('activities')
                ->count();

            return view('Shepherd.allMember',compact('users','activities','total'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateStatus($id, $status_code)
    {
        try {
            $update_user = User::where('id', $id)->update([
                'status' => $status_code
            ]);

            if ($update_user) {
                
                Alert::info('Actualizado!','A situacao do usuario foi actualizada com sucesso!');

                return redirect()->back();
            }

            Alert::error('Falha!','Falha ao bloquear o usuario.');

            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function updateStatu($id, $status_code)
    {
        try {
            $update_user = Announcement_member::where('id', $id)->update([
                'status' => $status_code
            ]);

            if ($update_user) {
                
                Alert::info('Actualizado!','O seu comunicado foi enviado ao administrador com sucesso!');

                return redirect()->back();
            }

            Alert::error('Falha!','Falha ao enviar o comunicado.');

            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function updateStatusRequest($id, $status_code)
    {
        try {
            $update_user = Prayer_request::where('id', $id)->update([
                'status' => $status_code
            ]);

            if ($update_user) {
                
                Alert::info('Actualizado!','O pedido de oracao foi aprovado com sucesso!');

                return redirect()->back();
            }

            Alert::error('Falha!','Falha ao aprovar o pedido de oracao');

            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function searchMember()
    {
        if(Auth::user()->hasRole('admin'))
        {
            //Declarando variavel que carrega os dados de input
            $thological=Request::input('theological_level');
            $surname=Request::input('surname');

            //Query build para retornar os usuarios filtrados
            
            $users=DB::table('users')
                ->where('theological_level',$thological)
                ->where('userType','member')
                ->where('surname',$surname)
                ->get();

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

            return view('Admin.allMember',compact('users','count_branches','count_activities','count_cults','count_shepherds','total','announcements','activities'));            
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
