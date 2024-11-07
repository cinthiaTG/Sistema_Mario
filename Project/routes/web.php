<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\generales\FanController;
use App\Http\Controllers\generales\UserController;
use App\Http\Controllers\generales\PerfilController;


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
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');  
Route::post('/users/store', [UserController::class, 'store'])->name('users.store'); 
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show'); 
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); 
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');



include(base_path('routes/routes_cat_s.php'));
include(base_path('routes/routes_cat_c.php'));
