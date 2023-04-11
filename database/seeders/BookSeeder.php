<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Esta línea es necesaria para que en una Mac se detecten 
        // correctamente los caracteres de nueva línea
        if (!ini_get("auto_detect_line_endings")) {
            ini_set("auto_detect_line_endings", '1');
        }

        $csv = Reader::createFromPath('database/libros.csv', 'r');
        // indicamos que el delimitador es el punto y coma
        $csv->setDelimiter(',');
        // Indicamos el índice de la fila de nombres de columnas
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();
        $count=0;
        foreach ($records as $r) {
            $count++;
            DB::table('libros')->insert([
                'id' => $count,
                'titulo' => $r['titulo'],
                'autor' => $r['autor'],
                'estante' => $r['estante'],
                'categoria' => $r['categoria'],
                'subcategoria' => $r['subcategoria'],
                'inventario' => $r['inventario'],
                'ejemplares' => $r['ejemplares'],
                'codigo' => $r['codigo']
            ]);
        }
    }
}

// $registro = new Book();
// $registro->estante = utf8_encode($r['estante']);
// $registro->categoria = utf8_encode($r['categoria']);
// $registro->subcategoria = utf8_encode($r['subcategoria']);
// $registro->inventario = utf8_encode($r['inventario']);
// $registro->codigo = utf8_encode($r['codigo']);
// $registro->titulo = utf8_encode($r['titulo']);
// $registro->autor = utf8_encode($r['autor']);
// $registro->ejemplares = $r['ejemplares'];
// $registro->save();