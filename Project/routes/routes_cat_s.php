<?php

use App\Http\Controllers\CrearTorneoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\Perfil2Controller;
use App\Http\Controllers\RegistrarJugadorController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

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

});