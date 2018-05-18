<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstadiosMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tbl_Estadios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo_Estadio');
            $table->string('Nombre_Estadio');
            $table->integer('Capacidad_Estadio');
            $table->string('Descripcion_Estadio');
            $table->string('Ciudad_Estadio');
            $table->string('Imagen_Estadio');
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
        Schema::dropIfExists('Tbl_Estadios');
    }
}
