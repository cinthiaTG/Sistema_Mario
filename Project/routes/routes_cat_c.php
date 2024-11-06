

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
        use App\Http\Controllers\VistasController;

        Route::group(['namespace' => 'App\Http\Controllers'], function() {

            Route::group(['prefix' => 'modulos/jugador'], function() {
                Route::get('/', [JugadorController::class, 'index'])->name('jugadores.index');
            });

            Route::group(['prefix' => 'modulos/Fanatico'], function() {
                //vista perfil
                //crear perfil
                //update perfil
                //opciones de fanatico
            });
            Route::group(['prefix' => 'modulos/vistas'], function() {
                Route::get('/enVivo', [VistasController::class, 'enVivo'])->name('vistas.enVivo');
                Route::get('/noticias', [VistasController::class, 'noticias'])->name('vistas.noticias');
                Route::get('/torneo', [VistasController::class, 'torneo'])->name('vistas.torneo');
                Route::get('/equipo', [VistasController::class, 'equipo'])->name('vistas.equipo');
                Route::get('/torneo', [VistasController::class, 'torneo'])->name('vistas.torneo');
                Route::get('/equipo', [VistasController::class, 'equipo'])->name('vistas.equipo');
                Route::get('/perfila', [VistasController::class, 'perfila'])->name('vistas.perfila');
            });



        });
        