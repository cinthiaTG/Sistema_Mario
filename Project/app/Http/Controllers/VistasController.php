<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class VistasController extends Controller{
    public function noticias()
        {
            return view("modulos.vistas.noticias");
        }

        public function enVivo()
        {
            return view("modulos.vistas.enVivo");
        }

        public function torneo()
        {
            return view("modulos.vistas.torneo");
        }

}