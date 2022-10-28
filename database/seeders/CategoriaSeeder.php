<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => 0,
            'nombre' => 'Generalidades',
            'descripcion'=>'Aquí encontrará ayuda para las tareas escolares: diccionarios, enciclopedias y todo acerca de las computadoras'
        ]);
        
        DB::table('categorias')->insert([
            'id' => 100,
            'nombre' => 'Filosofía y psicología',
            'descripcion'=>'¿Quiere aprender acerca de las grandes preguntas de la humanidad? Aquí encontrará toda la información.'
        ]);
        
        DB::table('categorias')->insert([
            'id' => 200,
            'nombre' => 'Religión',
            'descripcion'=>'Aprenda acerca de las diferentes religiones del mundo.'
        ]);

        DB::table('categorias')->insert([
            'id' => 300,
            'nombre' => 'Ciencias sociales',
            'descripcion'=>'Aquí encontrará información acerca de economía, negocios, política, profesiones, gobierno, leyes y educación.'
        ]);

        DB::table('categorias')->insert([
            'id' => 400,
            'nombre' => 'Lenguas',
            'descripcion'=>'¿Quiere aprender inglés o necesita ayuda con un idioma extranjero? Aquí encontrará toda la ayuda que busca.'
        ]);

        DB::table('categorias')->insert([
            'id' => 500,
            'nombre' => 'Matemáticas y ciencias naturales',
            'descripcion'=>'Aquí aprenderá acerca de plantas, animales, matemáticas, planetas, etc.'
        ]);

        DB::table('categorias')->insert([
            'id' => 600,
            'nombre' => 'Tecnología y ciencias aplicadas',
            'descripcion'=>'Infórmese acerca de la salud, el embarazo, la construcción, la carpintería, la cocina y cómo funciona su automóvil.'
        ]);

        DB::table('categorias')->insert([
            'id' => 700,
            'nombre' => 'Artes',
            'descripcion'=>'Si le gusta el arte, el diseño interior, la música o los deportes aquí encontrará lo que busca.'
        ]);

        DB::table('categorias')->insert([
            'id' => 800,
            'nombre' => 'Literatura',
            'descripcion'=>'Aquí encontrará drama, poemas y crítica literaria de alrededor del mundo'
        ]);

        DB::table('categorias')->insert([
            'id' => 900,
            'nombre' => 'Historia y geografía',
            'descripcion'=>'Viaje alrededor del mundo, aprenda la historia de los países'
        ]);
    }
}