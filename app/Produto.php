<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{   
    protected $table = 'produtos';
    protected $fillable = ['nome','qnt','estado','id_usuario','foto'];

    public function usuario(){
        
        return $this->belongsTo('App\Usuario','id_usuario');
    }

}