<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;


class JugadorController extends Controller{
    public function index()
    {
        return view("modulos.jugador.index");        // Esta retortnando una vista obviamente
    }

    public function create()
    {
        return view('modulos.registrarjugador');
    }

}
