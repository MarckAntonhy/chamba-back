<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUsuarioProveedor');
            $table->foreign('idUsuarioProveedor')->references('id')->on('usuario');
            $table->date('fecha');
            $table->time('hora');
            $table->double('precio',8,2);
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estado');
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
        Schema::dropIfExists('plan');
    }
}
