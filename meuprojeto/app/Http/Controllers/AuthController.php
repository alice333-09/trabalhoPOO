<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mostrarLogin()
    {
        // Se já estiver logado, manda direto para a index
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function validarLogin(Request $request)
    {
        // O Laravel já valida se os campos foram preenchidos
        $credenciais = $request->validate([
            'email' => ['required', 'email'], // o Laravel usa 'email' por padrão
            'password' => ['required'],       // o Laravel usa 'password' por padrão
        ], [
            'email.required' => 'Preencha o campo usuário/e-mail!',
            'password.required' => 'Preencha o campo senha!',
        ]);

        // Tenta logar o usuário (O Laravel já faz o SELECT e verifica a senha por você)
        // Nota: O Laravel espera que a senha esteja criptografada no banco (Hash::make).
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        // Se falhar, volta com a mensagem de erro
        return back()->withErrors([
            'erro_login' => 'Usuário ou senha incorretos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}