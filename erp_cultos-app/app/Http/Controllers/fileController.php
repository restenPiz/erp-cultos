<?php

namespace App\Http\Controllers;

use Request;
use App\Models\File;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class fileController extends Controller
{
    public function storeFile(Request $request)
    {
        if(Auth::user()->hasRole('worship_leader'))
        {
            $table=new File();

            $Name_type = $request->file('imagem')->getClientOriginalName();
            $File_type = $request->file('imagem')->getClientOriginalExtension();
            $Path = $request->file('imagem')->store('imagens');
        
            $table->Name_file=$Name_type;
            $table->File_type=$File_type;
            $table->Path=$Path;
            $table->Description=Request::input('Description');

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
}
