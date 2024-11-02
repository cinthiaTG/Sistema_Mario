

<?php
    /*
    cualquier controlador especificado en este bloque será buscado en el namespace
     App\Http\Controllers.
     */
      /*
        "prefijo" para todas las rutas definidas dentro de ese grupo. 
        Esto significa que todas las rutas que se encuentren dentro de esta función 
        tendrán como parte inicial de su URL el prefijo modulos/perfil.
        */

        use Illuminate\Support\Facades\Route;
        use App\Http\Controllers\JugadorController;
        use App\Http\Controllers\FanController;
        
        Route::group(['namespace' => 'App\Http\Controllers'], function() {

            Route::group(['prefix' => 'modulos/jugador'], function() {
                Route::get('/', [JugadorController::class, 'index'])->name('jugadores.index');
            });

            Route::group(['prefix' => 'modulos/Fanatico'], function() {
                Route::get('/', [FanController::class, 'index'])->name('aficionado.index');
            });
            Route::group(['prefix' => 'modulos/vistas'], function() {
                Route::get('/', [FanController::class, 'index'])->name('vistas.enVivo');
            });



        });
        