<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorico extends Migration
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
            $table->unsignedBigInteger('id_produtos');
            $table->foreign('id_produtos')->references('id')->on('produtos');
            $table->unsignedBigInteger('id_pedidos');
            $table->foreign('id_pedidos')->references('id')->on('pedidos');
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
