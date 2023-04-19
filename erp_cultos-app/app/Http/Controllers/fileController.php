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
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    public function addFile()
    {
        if (Auth::user()->hasRole('worship_leader')) {
            return view('Worship_leader.addFile');
        } else {
            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function storeFile()
    {
        if (Auth::user()->hasRole('worship_leader')) {
            $table = new Files();

            $table->Name_file = Request::input('Name_file');
            $table->Type_file = Request::input('Type_file');
            $table->Description = Request::input('Description');

            if (Request::file('File') != null) {
                $filename = Request::file('File')->getClientOriginalName();
                $link = "Ficheiros/" . $filename;
                $table->File = $link;
                $foto = Request::file('File');
                $foto->move('Ficheiros', $filename);
            }

            $table->save();

            Alert::success('Adicionado', 'O seu ficheiro foi adicionado com sucesso!');

            return redirect()->back();
        } else {
            Alert::error('Nao Autenticado', 'Voce nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function allFile()
    {
        if (Auth::user()->hasRole('worship_leader')) {
            $files = DB::table('files')->where('Type_file', 'Documento')->get();
            $images = DB::table('files')->where('Type_file', 'Imagem')->get();
            $videos = DB::table('files')->where('Type_file', 'Video')->get();
            $audios = DB::table('files')->where('Type_file', 'Audio')->get();

            return view('Worship_leader.Index', compact('files', 'images', 'videos','audios'));
        } else {
            Alert('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function updateFile($id)
    {
        if (Auth::user()->hasRole('worship_leader')) {
            $file = Files::findOrFail($id);

            $file->Name_file = Request::input('Name_file');
            $file->Type_file = Request::input('Type_file');
            $file->Description = Request::input('Description');
            $file->File = Request::input('File');
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

            Alert('Actualizado!', 'O ficheiro foi actualizado com sucesso!');

            return redirect()->back();
        } else {
            Alert('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }

    public function deleteFile($id)
    {
        if (Auth::user()->hasRole('worship_leader')) {
            $file = Files::findOrFail($id);

            $local = $file->File;
            if (File::exists($local)) {
                File::delete($local);
            }

            $file->delete();

            Alert('Eliminado!', 'O ficheiro foi eliminado com sucesso!');

            return redirect()->back();
        } else {
            Alert('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function playVideo($id)
    {
        if (Auth::user()->hasRole('worship_leader')) {
            $files = Files::findOrFail($id);

            return view('Worship_leader.playVideo', compact('files'));
        } else {
            Alert::error('Nao Autenticado!', 'O usuario nao esta autenticado no sistema!');

            return redirect()->route('login');
        }
    }
    public function dowloandFile($id)
    {
        $file = Files::find($id);

        $filepath = storage_path($file->File);

        if (File::exists($file)) {
            $headers = [
                'Content-Type' => 'video/mp4',
            ];
    
            return response()->download($filepath, $file->File, $headers);   
        }
    }
}