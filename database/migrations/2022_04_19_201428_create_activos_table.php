<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table ->engine="InnoDB";
            $table->id('id_activo');
            $table -> string('codigo_activo');
            $table -> integer('estado_activo') ->default(0);
            $table -> string('modelo_equipo');
            $table -> string('serie_activo');
            $table -> string('tipo_activo');
            $table -> integer('cantidad_activo');
            $table -> string('specs');
            $table -> string('direccion_ip');
            $table -> bigInteger('ubicacion_id') -> unsigned()->nullable();
            $table ->timestamps();

            $table ->foreign('ubicacion_id')->references('id')->on('ubicaciones') -> onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos');
    }
};
