<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_Calendario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Orden');
            $table->string('Dia');
            $table->string('Mes');
            $table->dateTime('Fecha_Partido');
            $table->integer('EquipoLocal_id')->unsigned();
            $table->foreign('EquipoLocal_id')->references('id')->on('Tbl_Equipos');
            $table->integer('EquipoVisitante_id')->unsigned();
            $table->foreign('EquipoVisitante_id')->references('id')->on('Tbl_Equipos');
            $table->integer('Fase_id')->unsigned();
            $table->foreign('Fase_id')->references('id')->on('Tbl_Fases');
            $table->integer('Estadio_id')->unsigned();
            $table->foreign('Estadio_id')->references('id')->on('Tbl_Estadios');
            $table->string('Marcador');
            $table->integer('GolesLocal');
            $table->integer('GolesVisitante');
            $table->string('Grupo');
            $table->integer('Tendencia');
            $table->boolean('userField1');
            $table->string('UserField2');
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
        Schema::dropIfExists('Tbl_Calendario');
    }
}
