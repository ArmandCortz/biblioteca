<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('subcategorias')->insert([
            'id' => 10,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 20,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 30,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 40,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 50,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 60,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 70,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 80,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 90,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>100
        ]);
        */

        
        DB::table('subcategorias')->insert([
            'id' => 10,
            'nombre' => 'Bibliografía',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 20,
            'nombre' => 'Bibliotecología y ciencias de la información',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 30,
            'nombre' => 'Enciclopedias generales',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 40,
            'nombre' => '',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 50,
            'nombre' => 'Publicaciones en serie',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 60,
            'nombre' => 'Organizaciones y museografía',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 70,
            'nombre' => 'Periodismo, editoriales, diarios',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 80,
            'nombre' => 'Colecciones generales',
            'descripcion'=>'',
            'categoria'=>0
        ]);

        DB::table('subcategorias')->insert([
            'id' => 90,
            'nombre' => 'Manuscritos y libros raros',
            'descripcion'=>'',
            'categoria'=>0
        ]);




        DB::table('subcategorias')->insert([
            'id' => 110,
            'nombre' => 'Metafísica',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 120,
            'nombre' => 'Conocimiento, causa, fin, hombre',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 130,
            'nombre' => 'Parapsicología, ocultismo, fenómenos paranormales',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 140,
            'nombre' => 'Escuelas filosóficas específicas',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 150,
            'nombre' => 'Psicología',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 160,
            'nombre' => 'Lógica',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 170,
            'nombre' => 'Ética (filosofía moral)',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 180,
            'nombre' => 'Filosofía antigua, medieval, oriental',
            'descripcion'=>'',
            'categoria'=>100
        ]);

        DB::table('subcategorias')->insert([
            'id' => 190,
            'nombre' => 'Filosofía moderna occidental',
            'descripcion'=>'',
            'categoria'=>100
        ]);
    }
}