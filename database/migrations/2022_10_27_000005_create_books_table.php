<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create_books_table
        Schema::create('libros', function (Blueprint $table) {
            $table->float("id",11,0)->primary()->unique();
            $table->string("titulo", 1000)->nullable();
            $table->string("autor", 1000)->nullable();
            $table->float("editorial",11,0)->nullable();
            $table->date("fech_publicacion")->nullable();
            $table->float("estado",11,0)->nullable();
            $table->string("estante", 100)->nullable();
            $table->float("categoria",11,0)->nullable();
            $table->float("subcategoria", 11, 0)->nullable();
            $table->float("inventario", 11, 4)->nullable();
            $table->float("ejemplares",11,0)->nullable();
            $table->string("nota",1000)->nullable();
            $table->string("codigo", 100)->nullable();
            $table->string("img", 1000)->nullable();
            
            $table->foreign("editorial")->references('id')->on('editoriales');
            $table->foreign("categoria")->references('id')->on('categorias');
            $table->foreign("subcategoria")->references('id')->on('subcategorias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};