<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;

class RegistrarEquipoController extends Controller {

    // Mostrar formulario de registro de equipo
    public function index()
    {
        return view('modulos.registrarequipo.index');
    }

    // Guardar un nuevo equipo en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_equipo' => 'required|string|max:255',
            'escudo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deporte_id' => 'required|exists:deportes,id'
        ]);

        // Almacenar el archivo de imagen
        $path = $request->file('escudo')->store('public/escudos');
        $filename = basename($path);

        // Crear el equipo en la base de datos
        Equipo::create([
            'nombre_equipo' => $request->nombre_equipo,
            'escudo' => $filename,
            'id_deporte' => $request->deporte_id,
        ]);

        return redirect()->route('registrarequipo.index')->with('success', 'Equipo registrado exitosamente');
    }

    // Editar equipo existente
    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('modulos.editarequipodos.index', compact('equipo'));
    }

    // Actualizar equipo en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_equipo' => 'required|string|max:255',
            'escudo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // campo escudo es opcional
        ]);

        $equipo = Equipo::findOrFail($id);

        // Verificar si se ha subido una nueva imagen de escudo
        if ($request->hasFile('escudo')) {
            // Eliminar el escudo anterior
            Storage::delete('public/escudos/' . $equipo->escudo);

            // Almacenar el nuevo archivo de imagen
            $path = $request->file('escudo')->store('public/escudos');
            $filename = basename($path);
        } else {
            // Si no se sube un nuevo escudo, conservar el escudo actual
            $filename = $equipo->escudo;
        }

        // Actualizar el equipo con los nuevos datos
        $equipo->update([
            'nombre_equipo' => $request->nombre_equipo,
            'escudo' => $filename,  // Actualizar o conservar el escudo
        ]);

        return redirect()->route('editarequipo.index')->with('success', 'Equipo actualizado con éxito');
    }




    // Eliminar equipo
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        Storage::delete('public/escudos/' . $equipo->escudo); // Eliminar escudo del equipo
        $equipo->delete();
        return redirect()->route('editarequipo.index')->with('success', 'Equipo eliminado con éxito');
    }

    // Crear vista de registro de equipo
    public function create()
    {
        return view('modulos.registrarequipo.index');
    }

    // Leer y listar todos los equipos
    public function read()
    {
        $equipos = Equipo::all();
        return view('modulos.editarequipo.index', compact('equipos'));
    }
}
