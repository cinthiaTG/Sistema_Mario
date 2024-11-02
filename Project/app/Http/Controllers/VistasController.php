<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class VistasController extends Controller{
    public function index()
        {
            return view("modulos.aficionado.index");
        }

        public function enVivo()
        {
            return view("modulos.vistas.enVivo");
        }
}