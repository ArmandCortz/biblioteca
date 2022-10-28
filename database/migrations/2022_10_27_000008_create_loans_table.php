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
        //create_loans_table
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->float("libro",11,0);
            $table->string("usuario");
            $table->string("notas",1000)->nullable();
            $table->dateTime("fech_prestamo");
            $table->dateTime("fech_devolucion")->nullable();
            
            $table->foreign("libro")->references('id')->on('libros');
            $table->foreign("usuario")->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
};