<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\generales\FanController;
use App\Http\Controllers\generales\UserController;
use App\Http\Controllers\generales\PerfilController;
use App\Http\Controllers\generales\RegistrarJugadorController;
use App\Models\Rol;
use App\Http\Controllers\generales\RegistrarEquipoController;
use App\Http\Controllers\generales\RegistrarInstalacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/perfil', [LoginController::class, 'perfil'])->name('perfil');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
// esta usando el controlador de user controller llamado index
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.process');


// Rutas para Jugadores
Route::get('/jugadores', [RegistrarJugadorController::class, 'index'])->name('jugadores.index');  // Lista de jugadores
Route::get('/jugadores/create', [RegistrarJugadorController::class, 'create'])->name('jugadores.create'); // Formulario para crear jugador
Route::post('/jugadores', [RegistrarJugadorController::class, 'store'])->name('jugadores.store'); // Almacenar jugador
Route::get('/jugadores/{id}', [RegistrarJugadorController::class, 'show'])->name('jugadores.show'); // Ver jugador
Route::get('/jugadores/{id}/edit', [RegistrarJugadorController::class, 'edit'])->name('jugadores.edit'); // Formulario de edición
Route::put('/jugadores/{id}', [RegistrarJugadorController::class, 'update'])->name('jugadores.update'); // Actualizar jugador
Route::delete('/jugadores/{id}', [RegistrarJugadorController::class, 'destroy'])->name('jugadores.destroy'); // Desactivar jugador

Route::get('/registrar-jugador', [RegistrarJugadorController::class, 'index'])->name('registrarjugador.index');
Route::post('/registrar-jugador', [RegistrarJugadorController::class, 'store'])->name('registrarjugador.store');

Route::get('/equipos', [RegistrarEquipoController::class, 'index'])->name('equipos.index');  // Lista de equipos
Route::get('/equipos/create', [RegistrarEquipoController::class, 'create'])->name('equipos.create'); // Formulario para crear Equipo
Route::post('/equipos', [RegistrarEquipoController::class, 'store'])->name('equipos.store'); // Almacenar Equipo
Route::get('/equipos/{id}', [RegistrarEquipoController::class, 'show'])->name('equipos.show'); // Ver Equipo
Route::get('/equipos/{id}/edit', [RegistrarEquipoController::class, 'edit'])->name('equipos.edit'); // Formulario de edición
Route::put('/equipos/{id}', [RegistrarEquipoController::class, 'update'])->name('equipos.update'); // Actualizar Equipo
Route::delete('/equipos/{id}', [RegistrarEquipoController::class, 'destroy'])->name('equipos.destroy'); // Desactivar Equipo


Route::get('/registrar-instalacion', [RegistrarInstalacionController::class, 'index'])->name('registrarinstalacion.index');
Route::get('/editar-instalacion', [RegistrarInstalacionController::class, 'index2'])->name('editarinstalacion.index');
Route::post('/registrar-instalacion', [RegistrarInstalacionController::class, 'store'])->name('registrarinstalacion.store');
Route::get('/editar-instalaciones', [RegistrarInstalacionController::class, 'edit'])->name('editarinstalaciones.index');
Route::post('/registrar-instalacion-read', [RegistrarInstalacionController::class, 'read'])->name('registrarinstalacion.read');


include(base_path('routes/routes_cat_s.php'));
include(base_path('routes/routes_cat_c.php'));
