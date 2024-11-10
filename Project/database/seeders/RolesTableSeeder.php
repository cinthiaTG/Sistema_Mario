<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Asegúrate de agregar esta línea

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Inserta los roles en la tabla roles
        DB::table('roles')->insert([
            ['id' => 1, 'nombre_rol' => 'Aficionado'],
            ['id' => 2, 'nombre_rol' => 'Entrenador'],
            ['id' => 3, 'nombre_rol' => 'Jugador'],
            ['id' => 4, 'nombre_rol' => 'Árbitro'],
        ]);
    }
}
