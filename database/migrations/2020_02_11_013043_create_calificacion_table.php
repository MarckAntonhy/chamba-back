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
            $table->integer('nroestrellas');
            $table->date('f_comentario');
            $table->time('h_comentario');
            $table->unsignedBigInteger('id_usuario_oficio');
            $table->foreign('id_usuario_oficio')->references('id')->on('usuario_oficio');
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
