<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>'gc01135836',
            'nombres' => 'Leonel Armando',
            'apellidos' => 'Garcia Cortez',
            'email' => 'armand1515.lc@gmail.com',
            'rol' => 1,
            'password' => bcrypt('gc01135836'),
        ]);
    }
}