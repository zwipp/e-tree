<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class home_controller extends Controller
{
    public function cadastroProduto(){
        return view('cadastro_produto');
    }

    public function doador(){
        return view('doador');
    }

    public function cadastroDoador(){
        return view('cadastro_doador');
    }

    public function home(){
        return view('home');
    }

    public function instituicao(){
        return view('instituicoes');
    }

    public function cadastroInstituicao(){
        return view('cadastro_instituicao');
    }

    public function login(){
        return view('login');
    }

    public function perfil($id){

        $usuario = Usuario::find($id);

        if(!$usuario) return redirect('/adm');

        
        return view('perfil-doar',compact('usuario'));
    }

    public function recepitor(){
        return view('recepitor');
    }

    public function perfilreceptor($id){
        $usuario = Usuario::find($id);

        if(!$usuario) return redirect('/adm');

        
        return view('perfil-recepitor',compact('usuario'));
    }

    public function pedidoproduto(){
        return view('pedido-produto');
    }
}
