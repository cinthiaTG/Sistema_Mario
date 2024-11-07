<?php

use App\Http\Controllers\generales\CrearTorneoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\Perfil2Controller;
use App\Http\Controllers\generales\RegistrarJugadorController;
use App\Http\Controllers\RegistrarResultadoUnoController;
use App\Http\Controllers\RegistrarResultadoDosController;
use App\Http\Controllers\RegistrarEquipoController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    Route::group(['prefix' => 'modulos/dashboard'], function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::group(['prefix' => 'modulos/signup'], function(){
        Route::get('/', [SignupController::class, 'index'])->name('signup.index');
    });

    Route::group(['prefix' => 'views/perfil'], function(){
        Route::get('/', [PerfilController::class, 'perfil'])->name('views.perfil');
    });

    Route::group(['prefix' => 'modulos/registrarresultadouno'], function(){
        Route::get('/', [RegistrarResultadoUnoController::class, 'index'])->name('registrarresultadouno.index');
    });

    Route::group(['prefix' => 'modulos/registrarresultadodos'], function(){
        Route::get('/', [RegistrarResultadoDosController::class, 'index'])->name('registrarresultadodos.index');
    });

});

// Agrupación de rutas para el namespace generales
Route::group(['namespace' => 'App\Http\Controllers\generales'], function() {

    Route::group(['prefix' => 'modulos/creartorneo'], function(){
        Route::get('/', [CrearTorneoController::class, 'index'])->name('creartorneo.index');
    });

    Route::group(['prefix' => 'modulos/registrarjugador'], function(){
        Route::get('/', [RegistrarJugadorController::class, 'index'])->name('registrarjugador.index');
    });

    Route::group(['prefix' => 'modulos/registarequipo'], function(){
        Route::get('/', [RegistrarEquipoController::class, 'index'])->name('registrarequipo.index');
    });

});
