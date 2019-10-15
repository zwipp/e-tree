<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['tipo','nome','email','password','cidade','estado','cep','cpf','telefone'];
   
   
    public function produtos(){
        return $this->hasMany('App\Produto','id_usuario');
    }

    public function pedidos(){
        return $this->hasMany('App\Pedido','id_usuario');
    }
}
