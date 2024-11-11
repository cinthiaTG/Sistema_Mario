<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class RegistrarJugadorController extends Controller {
    public function index() {
        return view("modulos.registrarjugador.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'posicion' => 'required|string|max:255',
            'puntos' => 'required|integer|min:0',
            'asistencias' => 'required|integer|min:0',
            'tarjetas_rojas' => 'required|integer|min:0',
            'tarjetas_amarillas' => 'required|integer|min:0',
            'faltas' => 'required|integer|min:0',
        ]);

        Jugador::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'edad' => $request->edad,
            'posicion' => $request->posicion,
            'puntos' => $request->puntos,
            'asistencias' => $request->asistencias,
            'tarjetas_rojas' => $request->tarjetas_rojas,
            'tarjetas_amarillas' => $request->tarjetas_amarillas,
            'faltas' => $request->faltas,
        ]);

        return redirect()->route('registrarjugador.index')->with('success', 'Jugador registrado exitosamente');
    }
}
