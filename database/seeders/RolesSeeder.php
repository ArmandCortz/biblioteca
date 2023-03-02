<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'nombre' => 'Administrador',
            'descripcion'=>'Administrador general del sistema'
        ]);
        
        DB::table('roles')->insert([
            'id' => 2,
            'nombre' => 'Bibliotecario',
            'descripcion'=>'Bibliotecario general'
        ]);
        
        DB::table('roles')->insert([
            'id' => 3,
            'nombre' => 'Estudiante',
            'descripcion'=>'Estudiante'
        ]);
    }
}