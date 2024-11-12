<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditarCanchaController extends Controller{
    public function index(){
        return view("modulos.editarcancha.index");
    }
}
