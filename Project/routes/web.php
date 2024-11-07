<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\generales\FanController;


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
Route::get('/singup', [LoginController::class, 'singup'])->name('singup');
Route::get('/perfil', [LoginController::class, 'perfil'])->name('perfil');


include(base_path('routes/routes_cat_s.php'));
include(base_path('routes/routes_cat_c.php'));
