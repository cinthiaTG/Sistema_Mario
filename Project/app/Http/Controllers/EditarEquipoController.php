<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditarEquipoController extends Controller{
    public function index(){
        return view("modulos.editarequipo.index");
    }
}
