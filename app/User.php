<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['tipo','nome','email','senha','cidade','estado','cep','cpf','telefone'];
   
   
    public function produtos(){
        return $this->hasMany('App\Produto','id_usuario');
    }
}