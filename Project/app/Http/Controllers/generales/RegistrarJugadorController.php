<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class RegistrarJugadorController extends Controller {
    public function index()
    {
        // Obtener todos los jugadores (o filtrarlos según sea necesario)
        $jugadores = Jugador::all();  // Aquí puedes modificar la consulta según lo que necesites

        // Pasar la variable jugadores a la vista
        return view('jugadores.index', compact('jugadores'));  // Utiliza 'jugadores' como nombre de la variable
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
        ]);

        return redirect()->route('registrarjugador.index')->with('success', 'Jugador registrado exitosamente');
    }

    //Muestra un formulario para editar al usuario
   // En RegistrarJugadorController.php

    public function edit($id)
    {
        // Obtener al jugador por su ID
        $jugador = Jugador::findOrFail($id);

        // Pasar la variable $jugador a la vista de edición
        return view('jugadores.edit', compact('jugador')); // Pasamos 'jugador' en lugar de 'jugadores'
    }

    // Actualiza un usuario específico
    // Actualiza un jugador específico
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
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

        // Buscar al jugador en la base de datos
        $jugador = Jugador::findOrFail($id);

        // Actualizar los datos del jugador
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

        // Redirigir con un mensaje de éxito
        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado con éxito');
    }


    // Cambiar el estado activo de un jugador a inactivo
    public function destroy($id)
    {
        // Buscar el jugador en la base de datos
        $jugador = Jugador::findOrFail($id);

        // Actualizar el estado activo a 0 (inactivo)
        $jugador->update(['activo' => 0]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('jugadores.index')->with('success', 'Jugador desactivado con éxito');
    }

}
