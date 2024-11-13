<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instalacion;

class RegistrarInstalacionController extends Controller
{
    public function index()
    {
        // Obtener todos los jugadores (o filtrarlos según sea necesario)
        //$jugadores = Jugador::all();  // Aquí puedes modificar la consulta según lo que necesites

        // Pasar la variable jugadores a la vista
        return view('modulos.registrarinstalacion.index');//, compact('jugadores'));  // Utiliza 'jugadores' como nombre de la variable
    }

    public function index2(){
        return view('modulos.registrarinstalacion.index2');//, compact('jugadores'));  // Utiliza 'jugadores' como nombre de la variable

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_instalacion' => 'required',
            'ubicacion' => 'required',
        ]);

        $instalacion = Instalacion::findOrFail($id);
        $instalacion->update([
            'nombre_instalacion' => $request->nombre_instalacion,
            'ubicacion' => $request->ubicacion,
        ]);

        return redirect()->route('registrarinstalacion.read')->with('success', 'Instalacion actualizada con éxito');
    }


    public function edit($id)
    {
        $instalacion = Instalacion::findOrFail($id);
        return view('modulos.registrarinstalacion.edit', compact('instalacion'));
    }
    // Leer y listar todos los equipos
    public function read()
    {
        $instalaciones = instalacion::all();
        return view('modulos.registrarinstalacion.read', compact('instalaciones'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_instalacion' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
        ]);



        Instalacion::create([
            'nombre_instalacion' => $request->nombre_instalacion,
            'ubicacion' => $request->ubicacion,
            'id_deporte' => $request->deporte_id,


        ]);

        return redirect()->route('registrarinstalacion.index')->with('success', 'Jugador registrado exitosamente');
    }

    public function destroy($id)
    {
        $instalacion = instalacion::findOrFail($id);
        $instalacion->delete();
        return redirect()->route('registrarinstalacion.read')->with('success', 'Jugador eliminado con éxito');
    }
}
