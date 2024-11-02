<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class FanController extends Controller{
    public function index()
        {
            return view("modulos.aficionado.index");
        }
}