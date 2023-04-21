<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Alert;

class anotherController extends Controller
{
    public function lockScreen(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'password' => 'required',
        ]);

        // Verifica se a senha fornecida pelo usuário é a mesma que a senha do usuário logado
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->input('password')])) {
            // Se a senha for válida, redirecione o usuário para a página de lock screen
            return redirect()->route('lockScreenPage');
        } else {
            // Se a senha for inválida, volte para a página anterior com uma mensagem de erro
            Alert::error('Senha Incorrecta!');

            return redirect()->back();
        }
    }
}
