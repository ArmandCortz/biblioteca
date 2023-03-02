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
<<<<<<< HEAD
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
=======
            'descripcion'=>'',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'nombre' => 'Bibliotecario',
            'descripcion'=>'',
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'nombre' => 'Estudiante',
            'descripcion'=>'',
        ]);
    }
}
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
