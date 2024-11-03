<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function() {
   
    Route::group(['prefix' => 'modulos/login'], function() {
        Route::get('/', [LoginController::class, 'index'])->name('login.index');
    });

    Route::group(['prefix' => 'modulos/dashboard'], function(){
        Route::get('/', [DashboardController::class. 'index'])->name('dashboard.index');
    });

});