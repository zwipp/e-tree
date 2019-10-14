<?php

namespace App\Http\Controllers;
use App\Produto;
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
            $produto->foto = $nomeArquivo;
        }

        $produto->save();

<<<<<<< HEAD
        return redirect('/perfil/doador/' . request('id_usuario'));
=======
        return redirect('/perfil/' . request('id_usuario'));
>>>>>>> 52c654ce3a1a08ae4bae9467032e6bb95f10fb8a




    }
}