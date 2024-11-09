<?php

namespace App\Http\Controllers\generales;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = Usuario::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    // Valida los datos y guarda en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required',  // Cambié a 'contraseña'
            'rol_id' => 'required|in:1,2,3,4',  
        ]);

        // Creando un nuevo us
        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contraseña' => bcrypt($request->contraseña),
            'activo' => 1, 
            'rol_id' => $request->rol_id,
        ]);

        // Redirige con un mensaje de exito y llega a la vista de index
        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito');
    }

    // Muestra los detalles de un usuario específico
    public function show($id)
    {
        $user = Usuario::findOrFail($id);
        return view('users.show', compact('user'));
    }

    //Muestra un formulario para editar al usuario
    public function edit($id)
    {
        $user = Usuario::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Actualiza un usuario específico
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $id, 
            'rol_id' => 'required|in:1,2,3,4',  
        ]);

        $user = Usuario::findOrFail($id);
        $user->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'activo' => $request->has('activo') ? 1 : 0,  // Si el checkbox está marcado, se guarda 1 sino en 0
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito');
    }

    // Cambiar el estado activo de un usuario a inactivo
    public function destroy($id)
    {
        $user = Usuario::findOrFail($id);
        $user->update(['activo' => 0]);

        return redirect()->route('users.index')->with('success', 'Usuario desactivado con éxito');
    }
}
