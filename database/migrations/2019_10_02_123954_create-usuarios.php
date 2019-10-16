<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->bigInteger('tipo');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cidade');
            $table->string('estado');
            $table->bigInteger('cep');
            $table->bigInteger('cpf')->unique();
            $table->bigInteger('telefone')->unique();
            $table->string('foto')->default('images/fotopadrao.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
