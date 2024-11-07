<?php

namespace App\Http\Controllers\generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrarJugadorController extends Controller {
    public function index() {
        return view("modulos.registrarjugador.index");
    }
}
