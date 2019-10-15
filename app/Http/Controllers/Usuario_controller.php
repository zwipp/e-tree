<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class Usuario_controller extends Controller
{
    public function criar_usuario(){

        request()->validate([

            
        ]);

        $usuario = new Usuario();

        $usuario->nome=request('nome');
        $usuario->tipo=request('tipo');
        $usuario->email=request('email');
        $usuario->password=request('senha');
        $usuario->cidade=request('cidade');
        $usuario->estado=request('estado');
        $usuario->cep=request('cep');
        $usuario->cpf=request('cpf');
        $usuario->telefone=request('telefone');

        if (!empty(request('foto'))) {
            $nomeArquivo = time() . '.' . request('foto')->extension();
            
            
            request('foto')->storeAs('\uploads', $nomeArquivo);
            $usuario->foto = $nomeArquivo;
        }

        $usuario->save();

        if($usuario->tipo == 2){

            return redirect('/perfil/doador' . $usuario->id);
        }

        if ($usuario->tipo == 3) {
            return redirect('/perfil/receptor' . $usuario->id);
        }
        
        


    }
}
