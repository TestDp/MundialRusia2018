<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioUsuarioMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_CalendarioUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('id')->on('Users');
            $table->integer('Id_Calendario')->unsigned();
            $table->foreign('Id_Calendario')->references('id')->on('Tbl_Calendario');
            $table->integer('Goles_Local');
            $table->integer('Goles_Visitante');
            $table->integer('Tendencia');
            $table->boolean('CampoAdicional');
            $table->String('CampoAdicional2');
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
        Schema::dropIfExists('Tbl_CalendarioUsuario');
    }
}
