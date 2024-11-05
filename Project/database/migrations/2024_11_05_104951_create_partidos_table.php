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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_torneo');
            $table->foreign('id_torneo')->references('id')->on('torneos')->onDelete('cascade');        
            $table->unsignedBigInteger('id_equipo_local');
            $table->foreign('id_equipo_local')->references('id')->on('equipos')->onDelete('cascade');  
            $table->unsignedBigInteger('id_equipo_visitante');
            $table->foreign('id_equipo_visitante')->references('id')->on('equipos')->onDelete('cascade');   
            $table->date('fecha');
            $table->time('hora');
            $table->string('lugar');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
