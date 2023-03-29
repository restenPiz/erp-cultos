<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Files;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class fileController extends Controller
{
    public function storeFile()
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $table=new Files();

            $table->Name_file=Request::input('Name_file');
            $table->File_type=Request::input('File_type');
            $table->Path=Request::input('Path');
            $table->Description=Request::input('Description');

            if(Request::file('File')!=null)
            {
                $filename = Request::file('File')->getClientOriginalName();
                $link = "Ficheiros/" . $filename;
                $table->File = $link;
                $foto = Request::file('File');
                $foto->move('Ficheiros', $filename);
            }

            $table->save();

            Alert::success('Adicionado','O seu ficheiro foi adicionado com sucesso!');

            return redirect()->route('allFile');
        }
        else
        {
            Alert::error('Nao Autenticado','Voce nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function allFile()
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $files=File::all();

            return view('Worship_leader.allFile', compact('files'));
        }
        else
        {
            Alert('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function updateFile($id)
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $file=File::findOrFail($id);

            $file->Name_file=Request::input('Name_file');
            $file->Type_file=Request::input('Type_file');
            $file->Path=Request::input('Path');
            $file->Description=Request::input('Description');
            $local = $file->File;

            if (File::exists($local)) {
                File::delete($local);
            }
    
            //Capturando a imagem
            if (Request::file('File') != null) {
                $filename = Request::file('File')->getClientOriginalName();
                $link = "Ficheiros/" . $filename;
                $file->File = $link;
                $foto = Request::file('File');
                $foto->move('Ficheiros/', $filename);
            }

            $file->save();

            Alert('Actualizado!','O ficheiro foi actualizado com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function destroyFile($id)
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $file=Files::findOrFail($id);

            $file->destroy();

            Alert('Eliminado!','O ficheiro foi eliminado com sucesso!');

            return redirect()->back();
        }
        else
        {
            Alert('Nao Autenticado!','O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
}
