<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica_jugador extends Model
{
    use HasFactory;
    protected $table = 'estadisticas_jugadores';
    protected $fillable = ['puntos','asistencias','tarjetas_amarillas','tarjetas_rojas','partidos_jugados'];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class);
    }

}
