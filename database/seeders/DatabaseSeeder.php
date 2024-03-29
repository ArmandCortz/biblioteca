<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CategoriaSeeder::class);
        $this->call(SubcategoriaSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(BookSeeder::class);

    }
}