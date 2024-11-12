<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;

class RegistrarEquipoController extends Controller {
    public function index()
    {
        return view('modulos.registrarequipo.index');
    }

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

    public function create()
    {
        return view('modulos.registrarequipo.index');
    }
}
