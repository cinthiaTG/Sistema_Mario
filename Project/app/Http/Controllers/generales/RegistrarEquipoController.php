<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;

class RegistrarEquipoController extends Controller {
    public function index()
    {
        // Obtener todos los jugadores (o filtrarlos según sea necesario)
        //$jugadores = Jugador::all();  // Aquí puedes modificar la consulta según lo que necesites

        // Pasar la variable jugadores a la vista
        return view('modulos.registrarequipo.index');//, compact('jugadores'));  // Utiliza 'jugadores' como nombre de la variable
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_equipo' => 'required|string|max:255',
            'escudo' => 'required|string|max:255',
        ]);



        Equipo::create([
            'nombre_equipo' => $request->nombre_equipo,
            'escudo' => $request->escudo,
            'id_deporte' => $request->deporte_id,


        ]);

        return redirect()->route('registrarequipo.index')->with('success', 'Jugador registrado exitosamente');
    }

    //Muestra un formulario para editar al usuario
   // En RegistrarequipoController.php





    public function create()
    {
        return view('modulos.registrarequipo.index'); // Aquí debes tener la vista de creación
    }



}
