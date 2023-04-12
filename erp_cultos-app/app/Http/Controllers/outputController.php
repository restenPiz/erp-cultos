<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Output;
use App\Models\Input;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class outputController extends Controller
{
    public function addOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $users=User::all();
            $inputs=Input::all();

            return view('Treasurer.addOutput', compact('users','inputs'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function storeOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $table=new Output();
            
            $table->Value=Request::input('Value');
            $table->Description=Request::input('Description');
            $table->Id_user=Request::input('Id_user');
            $table->Id_input=Request::input('Id_input');
            $table->Day=Request::input('Day');

            $user=User::find(Request::input('Id_user'));

            $input=Input::find(Request::input('Id_input'));

            $input->Offert_value_confirmation-=$table->Value;

            $table->save();
            $user->save();
            $input->save();

            Alert::success('Adicionado!','A sua saida foi introduzida com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function allOutput()
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $users=User::all();
            $inputs=Input::all();
            $outputs=Output::all();

            return view('Treasurer.allOutput',compact('users','outputs','inputs'));
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateOutput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $table=Output::find($id);
            
            $table->Value=Request::input('Value');
            $table->Description=Request::input('Description');
            $table->Id_user=Request::input('Id_user');
            $table->Id_input=Request::input('Id_input');
            $table->Day=Request::input('Day');

            $user=User::find(Request::input('Id_user'));

            $input=Input::find(Request::input('Id_input'));

            $input->Offert_value_confirmation-=$table->Value;

            $table->save();
            $user->save();
            $input->save();

            Alert::success('Actualizado!','A sua saida foi actualizada com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function deleteOutput($id)
    {
        if(Auth::user()->hasRole('treasurer'))
        {
            $output=Output::find($id);

            $output->delete();

            Alert::success('Eliminado!','O usuario foi eliminado com sucesso!');

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
            $outputs = Output::all();
            $html = '<table class=table align-middle table-nowrap><thead class=table-light><tr><th class="sort">ID</th><th class="sort">Valor</th><th class="sort">Data de Saida</th><th class="sort">Nome</th><th class="sort">Data de Entrada</th><th class="sort">Descricao</th></tr></thead><tbody class="list form-check-all">';

            foreach ($outputs as $output) {
                $html .= "<tr><td>{$output->id}</td><td>{$output->Value}</td><td>{$output->Day}</td><td>{$output->users->name}</td><td>{$output->inputs->Day}</td><td>{$output->Description}</td></tr>";
            }
            $html .= '</tbody></table>';

            $pdf = PDF::loadHTML($html);
            return $pdf->stream('relatorio_de_saida.pdf');
        }
        else
        {
            Alert::error('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
