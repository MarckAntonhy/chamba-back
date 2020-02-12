<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->date('f_nacimiento');
            $table->string('correo');
            $table->string('password');
            $table->string('genero',1);
            $table->string('telefono');
            $table->unsignedBigInteger('id_distrito');
            $table->foreign('id_distrito')->references('id')->on('distrito');
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
        Schema::dropIfExists('usuario');
    }
}
