<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ['nome','qnt','id_usuario'];

    public function usuario(){
        
        return $this->belongsTo('App\Usuario','id_usuario');
    }
}
