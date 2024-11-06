<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estadisticas_jugadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jugador');
            $table->foreign('id_jugador')->references('id')->on('jugadores')->onDelete('cascade');
            $table->integer('puntos');
            $table->integer('asistencias');
            $table->integer('tarjetas_amarillas');
            $table->integer('tarjetas_rojas');
            $table->integer('partidos_jugados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadisticas_jugadores');
    }
};
