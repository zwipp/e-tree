<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class Usuario_controller extends Controller
{
    public function criar_usuario(){

        request()->validate([

            'nome'=>'required',
            'senha'=>'required|min:5',
            'tipo'=>'required|numeric',
            'email'=>'required|email|unique:usuarios',
            'cidade'=>'required',
            'estado'=>'required',
            'cep'=>'required|min:8',
            'cpf'=>'required|min:11',
            'telefone'=>'required'

        ]);

        $usuario = new Usuario();

        $usuario->nome=request('nome');
        $usuario->tipo=request('tipo');
        $usuario->email=request('email');
        $usuario->senha=request('senha');
        $usuario->cidade=request('cidade');
        $usuario->estado=request('estado');
        $usuario->cep=request('cep');
        $usuario->cpf=request('cpf');
        $usuario->telefone=request('telefone');

        if (!empty(request('foto'))) {
            $caminhoAbsoluto = public_path() . '/storage/uploads';
            $nomeArquivo = time() . '.' . request('foto')->extension();
            
            
            request('foto')->move($caminhoAbsoluto, $nomeArquivo);
            $usuario->foto = $nomeArquivo;
        }

        $usuario->save();


        if(request('tipo') == 2){
            return redirect('/perfil');
        }
        return redirect('/perfil/recepitor');
        
        


    }
}
