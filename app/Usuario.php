<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['tipo','nome','email','senha','cidade','estado','cep','cpf','telefone'];
}
