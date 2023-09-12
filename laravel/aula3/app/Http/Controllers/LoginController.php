<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Login;


class LoginController extends Controller
{
  
   
        public function login(Request $request)
        {
            $this->validate($request, [
                'txUsuario' => 'required|alpha_dash', // Verifica se é um nome de usuário válido
                'txSenha' => 'required|min:6',        // Verifica se a senha tem pelo menos 6 caracteres
            ]);
    
            // Recupere as credenciais do formulário
            $credentials = $request->only('txUsuario', 'txSenha');
    
            // Tente autenticar o usuário
            if (auth()->attempt($credentials)) {
                // Verifique se o usuário autenticado é um administrador
                if (auth()->user()->txUsuario === 'adm') {
                    // Usuário é um administrador, redirecione para uma página de administrador
                    return redirect('login');
                }
            } else {
                // A autenticação falhou, redirecione de volta com uma mensagem de erro
                return redirect('login')->with('error', 'Credenciais inválidas. Tente novamente.');
            }
        }
    
    
}
