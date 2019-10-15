<?php

namespace App\Http\Controllers;
use App\Pedido;
use Illuminate\Http\Request;

class Pedido_controller extends Controller
{

    public function criar_pedido(){

        
        request()->validate([

            'nome'=>'required',
            'qnt'=>'required|numeric',
            'id_usuario'=>'required|numeric'
        ]);

        $pedido = new Pedido();
    
        $pedido->nome=request('nome');
        $pedido->qnt=request('qnt');
        $pedido->id_usuario=request('id_usuario');


        $pedido->save();

        return redirect('/perfil/receptor/' . request('id_usuario'));
    }
}
