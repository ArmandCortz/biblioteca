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
        //create_subcategories_table
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->float("id",11,0)->primary()->unique();
            $table->string("nombre",1000);
            $table->string("descripcion",1000)->nulable();
            $table->float("categoria",11,0)->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias');
    }
};