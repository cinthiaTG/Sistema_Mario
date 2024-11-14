<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class RegistrarJugadorController extends Controller {
    public function index()
    {
        // Pasar la variable 'jugadores' a la vista
        return view('modulos.registrarjugador.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'edad' => 'required|integer',
            'posicion' => 'required|string|max:255',
            'puntos' => 'required|integer',
            'asistencias' => 'required|integer',
            'tarjetas_rojas' => 'required|integer',
            'tarjetas_amarillas' => 'required|integer',
            'faltas' => 'required|integer',
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
            'id_deporte' => $request->deporte_id,
        ]);

        return redirect()->route('registrarjugador.index')->with('success', 'Jugador registrado exitosamente');
    }

    public function edit($id)
    {
        $jugador = Jugador::findOrFail($id);
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'edad' => 'required|integer',
            'posicion' => 'required',
            'puntos' => 'required|integer',
            'asistencias' => 'required|integer',
            'tarjetas_amarillas' => 'required|integer',
            'tarjetas_rojas' => 'required|integer',
            'faltas' => 'required|integer',
        ]);

        $jugador = Jugador::findOrFail($id);
        $jugador->update([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'edad' => $request->edad,
            'posicion' => $request->posicion,
            'puntos' => $request->puntos,
            'asistencias' => $request->asistencias,
            'tarjetas_amarillas' => $request->tarjetas_amarillas,
            'tarjetas_rojas' => $request->tarjetas_rojas,
            'faltas' => $request->faltas,
        ]);
            //aqui
        return redirect()->route('editarjugador.index')->with('success', 'Jugador actualizado con éxito');
    }

    public function destroy($id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();
        return redirect()->route('editarjugador.index')->with('success', 'Jugador eliminado con éxito');
    }

    public function create()
    {
        return view('modulos.registrarjugador.index');
    }

    // Nueva función 'read' para listar jugadores
    public function read()
    {
        // Obtener todos los jugadores de la base de datos
        $jugadores = Jugador::all();

        // Pasar la variable 'jugadores' a la vista
        return view('modulos.editarjugador.index', compact('jugadores'));
    }
}
