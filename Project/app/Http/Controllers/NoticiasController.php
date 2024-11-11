<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(){
        return view('modulos.vistas.noticias');
                // Esta retortnando una vista obviamente

    }
}
