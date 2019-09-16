<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('nome', ['notbook', 'desktop','monitor']);
            $table->bigInteger('qnt');
            $table->enum('estado', ['novo', 'bom','analise']);
            $table->unsignedBigInteger('id_recepitor');
            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_recepitor')->references('id')->on('recepitor');
            $table->foreign('id_produto')->references('id')->on('produtos');
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
        Schema::dropIfExists('historico');
    }
}
