<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class Adm_controller extends Controller
{
    public function index(){

        return view('adm');
    }

    public function visualizarUsuarios(){

        $doadores = Usuario::where('tipo','2')->get();

        $receptores = Usuario::where('tipo','3')->get();
        
        return view('adm',compact('doadores','receptores'));
    }
    public function delete($id){

        $usuario = Usuario::find($id);

        $usuario->delete();

        return redirect('/adm');
    }
}
