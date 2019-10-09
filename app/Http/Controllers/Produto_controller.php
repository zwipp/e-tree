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
            // request('foto')->store('uploads');

            $caminhoAbsoluto = public_path() . '/storage/uploads';
            // $tamanho = request('foto')->getSize();
            $nomeArquivo = time() . '.' . request('foto')->extension();
            
            
            request('foto')->move($caminhoAbsoluto, $nomeArquivo);
            $usuario->foto = $nomeArquivo;
        }

        $produto->save();

        return redirect('/perfil');




    }
}