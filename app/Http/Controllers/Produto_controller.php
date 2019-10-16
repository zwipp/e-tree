<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Estoque;
use App\Pedido;
use Illuminate\Http\Request;

class Produto_controller extends Controller
{
    public function criar_produto(){

        request()->validate([

            'nome'=>'required',
            'qnt'=>'required|numeric',
            'estado'=>'required',
            'id_usuario'=>'required|numeric'
        ]);


        $produto = new Produto();

        $produto->nome=request('nome');
        $produto->qnt=request('qnt');
        $produto->estado=request('estado');
        $produto->id_usuario=request('id_usuario');

        if (!empty(request('foto'))) {
            $nomeArquivo = time() . '.' . request('foto')->extension();
            
            
            request('foto')->storeAs('\uploads', $nomeArquivo);
            $produto->foto = 'storage/uploads/' . $nomeArquivo;
        }

        $produto->save();

        $estoque = Estoque::where('nome',request('nome'))->first();

        $estoque->qnt += request('qnt');

        $estoque->save();

        
        return redirect('/perfil/doador/' . request('id_usuario'));




    }

    public function baixa_estoque(){

        $pedido = Pedido::find(request('id'));
        $pedido->delete();

        $estoque = Estoque::where('nome',request('nome'))->first();

        $estoque->qnt -= request('qnt');



        $estoque->save();

        return redirect('/adm');

    }
}