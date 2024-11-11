<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugador extends Model
{
    use HasFactory;
    protected $table = "jugadores";
    protected $fillable = ['nombre','edad','posicion'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function deporte()
    {
        return $this->belongsTo(Deporte::class);
    }

}
