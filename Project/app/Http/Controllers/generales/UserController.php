<?php

namespace App\Http\Controllers\generales;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Mostrar lista de usuarios
    public function index()
    {
        $users = Usuario::all();
        return view('users.index', compact('users'));
    }

    // Mostrar el formulario para crear un nuevo usuario
    public function create()
    {
        return view('users.create');
    }

    // Validación de datos y guardado en la base de datos
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email',
        'password' => 'required',  
        'rol_id' => 'required|in:1,2,3,4',  
    ]);

    // Crear el nuevo usuario
    Usuario::create([
        'nombre' => $request->nombre,
        'email' => $request->email,
        'contraseña' => bcrypt($request->password),
        'activo' => 1, 
    ]);

    // Redirigir con un mensaje de éxito
    return redirect()->route('users.index')->with('success', 'Usuario creado con éxito');
}


    // Mostrar detalles de un usuario específico
    public function show($id)
    {
        $user = Usuario::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Mostrar el formulario para editar un usuario específico
    public function edit($id)
    {
        $user = Usuario::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Actualizar un usuario específico en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $id, 
        ]);

        $user = Usuario::findOrFail($id);
        $user->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'rol_id' => $request->rol_id,
            'activo' => $request->has('activo') ? 1 : 0,  // Si el checkbox está marcado, se guarda '1', si no '0'

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
