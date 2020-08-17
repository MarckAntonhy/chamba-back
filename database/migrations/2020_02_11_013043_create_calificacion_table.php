<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comentario');
            $table->integer('like');
            $table->date('f_comentario');
            $table->time('h_comentario');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->unsignedBigInteger('id_usuario_suboficio');
            $table->foreign('id_usuario_suboficio')->references('id')->on('usuario_suboficio');
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
        Schema::dropIfExists('calificacion');
    }
}
