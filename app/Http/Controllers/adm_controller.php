<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Pedido;
use App\Produto;
use App\Estoque;


class Adm_controller extends Controller
{
    public function index(){

        return view('adm');
    }

    public function visualizarUsuarios(){

        $doadores = Usuario::where('tipo','2')->get();

        $receptores = Usuario::where('tipo','3')->get();
        
        $pedidos =  Pedido::all();

        $qntDesktops = Estoque::where('nome','desktop')->first()->qnt;
        $qntNotebooks = Estoque::where('nome','notebook')->first()->qnt;
        $qntMonitor = Estoque::where('nome','monitor')->first()->qnt;

        return view('adm',compact('doadores','receptores','pedidos','qntNotebooks','qntDesktops','qntMonitor'));
    }
    public function delete($id){

        $usuario = Usuario::find($id);

        $usuario->delete();

        return redirect('/adm');
    }
}
