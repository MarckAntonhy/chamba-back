<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('rol');
            $table->unsignedBigInteger('id_permiso');
            $table->foreign('id_permiso')->references('id')->on('permiso');
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
        Schema::dropIfExists('rol_permiso');
    }
}
