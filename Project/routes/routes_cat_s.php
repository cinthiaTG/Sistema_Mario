<?php

use App\Http\Controllers\generales\CrearTorneoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\Perfil2Controller;
use App\Http\Controllers\generales\RegistrarJugadorController;
use App\Http\Controllers\RegistrarResultadoUnoController;
use App\Http\Controllers\RegistrarResultadoDosController;
use App\Http\Controllers\generales\RegistrarEquipoController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerfilJugadorController;
use App\Http\Controllers\EditarJugadorController;
use App\Http\Controllers\EditarJugadorDosController;
use App\Http\Controllers\EditarEquipoController;
use App\Http\Controllers\EditarEquipoDosController;

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    // Route::group(['prefix' => 'modulos/login'], function() {
    //     Route::get('/', [LoginController::class, 'index'])->name('login.index');
    // });

    Route::group(['prefix' => 'modulos/dashboard'], function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::group(['prefix' => 'modulos/signup'], function(){
        Route::get('/', [SignupController::class, 'index'])->name('signup.index');
    });

    Route::group(['prefix' => 'modulos/creartorneo'], function(){
        Route::get('/', [CrearTorneoController::class, 'index'])->name('creartorneo.index');
    });

    Route::group(['prefix' => 'modulos/registarjugador'], function(){
        Route::get('/', [RegistrarJugadorController::class, 'index'])->name('registrarjugador.index');
    });

    Route::group(['prefix' => 'views/perfil'], function(){
        Route::get('/', [PerfilController::class, 'perfil'])->name('views.perfil');
    });

    Route::group(['prefix' => 'modulos/registarequipo'], function(){
        Route::get('/', [RegistrarEquipoController::class, 'index'])->name('registrarequipo.index');
    });

    Route::group(['prefix' => 'modulos/registrarresultadouno'], function(){
        Route::get('/', [RegistrarResultadoUnoController::class, 'index'])->name('registrarresultadouno.index');
    });

    Route::group(['prefix' => 'modulos/registrarresultadodos'], function(){
        Route::get('/', [RegistrarResultadoDosController::class, 'index'])->name('registrarresultadodos.index');
    });

    Route::group(['prefix' => 'modulos/perfiljugador'], function(){
        Route::get('/', [PerfilJugadorController::class, 'index'])->name('perfiljugador.index');
    });

    Route::group(['prefix' => 'modulos/editarjugador'], function(){
        Route::get('/', [RegistrarJugadorController::class, 'read'])->name('editarjugador.index');
    });

    Route::group(['prefix' => 'modulos/editarjugadordos'], function(){
        Route::get('/', [EditarJugadorDosController::class, 'index'])->name('editarjugadordos.index');
    });

    Route::get('/registrar-equipo', [RegistrarEquipoController::class, 'index'])->name('registrarequipo.index');
    Route::post('/registrar-equipo', [RegistrarEquipoController::class, 'store'])->name('registrarequipo.store');

    Route::group(['prefix' => 'modulos/editarequipo'], function(){
        Route::get('/', [EditarEquipoController::class, 'index'])->name('editarequipo.index');
    });

    Route::group(['prefix' => 'modulos/editarequipodos'], function(){
        Route::get('/', [EditarEquipoDosController::class, 'index'])->name('editarequipodos.index');
    });
});
