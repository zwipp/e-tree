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
        ]);

        $pedido = new Pedido();
    
        $pedido->nome=request('nome');
        $pedido->qnt=request('qnt');


        $pedido->save();

        return redirect('/perfil/receptor');
    }
}
