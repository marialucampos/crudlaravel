<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller {

    public function index() { // a visão que pede usuário e senha
        return view('login.index');
    }  

    public function entrar(Request $req) {
     $dados = $req->all();
        If ( Auth::attempt( [ 'email' => $dados['email'], 'password' => $dados['senha'] ] ) ) {
            return redirect()->route('home'); // redireciona para a home, mas agora, logado !
        }else {
            return redirect()->route('login');
        }
    }

    public function sair() {
        Auth::logout();
        return redirect()->route('home');
    }
} 






