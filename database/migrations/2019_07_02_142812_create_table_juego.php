<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre', 100);
            $table->char('desc', 250);
            $table->char('enlace1', 250);
            $table->char('enlace2', 250);
            $table->char('enlace3', 250);
            $table->char('img1', 250);
            $table->char('img2', 250);
            $table->char('img3', 250);
            $table->float('puntuacion', 8,2);
            $table->char('plataforma', 100);
            $table->integer('descargas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_juego');
    }
}
