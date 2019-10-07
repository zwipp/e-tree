<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class Adm_controller extends Controller
{
    public function index(){

        return view('adm');
    }

    public function visualizarUsuario(){

        $usuarios = Usuario::all();

        return view('adm',compact('usuarios'));
    }
}
