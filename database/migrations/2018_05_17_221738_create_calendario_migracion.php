<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioMigracion extends Migration
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
            $table->integer('EquipoVisitante_id')->unsigned();
            $table->integer('Fase_id')->unsigned();
            $table->integer('Estadio_id')->unsigned();
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
