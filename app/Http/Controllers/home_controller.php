<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    public function cadastroProduto(){
        return view('cadastro_produto');
    }

    public function doador(){
        return view('doador');
    }

    public function home(){
        return view('home');
    }

    public function instituicao(){
        return view('instituicoes');
    }

    public function login(){
        return view('login');
    }

    public function perfil(){
        return view('perfil-doar');
    }

    public function recepitor(){
        return view('recepitor');
    }

    public function perfilreceptor(){
        return view('perfil-recepitor');
    }

    public function pedidoproduto(){
        return view('pedido-produto');
    }
}
