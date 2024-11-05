<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrarTorneoController extends Controller{
    public function index(){
        return view("modulos.registrartorneo.index");
    }
}