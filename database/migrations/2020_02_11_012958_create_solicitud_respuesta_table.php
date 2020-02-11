<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_respuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('confirmado');
            $table->unsignedBigInteger('id_usuario_proveedor');
            $table->foreign('id_usuario_proveedor')->references('id')->on('usuario');
            $table->unsignedBigInteger('id_solicitud');
            $table->foreign('id_solicitud')->references('id')->on('solicitud');
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
        Schema::dropIfExists('solicitud_respuesta');
    }
}
