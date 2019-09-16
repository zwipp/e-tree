<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('nome', ['notbook', 'desktop','monitor']);
            $table->bigInteger('qnt');
            $table->enum('estado', ['novo', 'bom','analise']);
            $table->unsignedBigInteger('id_doador');
            $table->foreign('id_doador')->references('id')->on('doador');
            $table->string('foto');
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
        Schema::dropIfExists('produtos');
    }
}
