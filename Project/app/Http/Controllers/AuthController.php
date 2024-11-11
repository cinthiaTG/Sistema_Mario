<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    // Maneja el login
    // Maneja el login
    public function login(Request $request)
{
    // Validación inicial de los campos
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intentar encontrar el usuario por correo electrónico
    $user = Usuario::where('email', $request->email)->first();

    // Si el usuario no existe, agregar error
    if (!$user) {
        return back()->withErrors(['email' => 'Usuario no encontrado']);
    }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Autenticación exitosa
        return redirect()->intended('dashboard');
    } else {
        // Autenticación fallida
        return back()->withErrors(['password' => 'La contraseña proporcionada no coincide con nuestros registros.']);
    }


    // Iniciar sesión si las credenciales son correctas
    Auth::login($user);

    // Redireccionar según el rol
    switch ($user->rol_id) {
        case '1':
            return redirect()->route('vistas.noticias');
        case '2':
            return redirect()->route('dashboard.index');
        case '3':
        case '4':
            return redirect()->route('vistas.noticias');
        default:
            return redirect()->route('login')->withErrors(['error' => 'Rol no válido']);
    }
}





}
