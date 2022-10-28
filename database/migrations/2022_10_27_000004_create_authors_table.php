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
        //create_authors_table
        Schema::create('autores', function (Blueprint $table) {
            $table->float("id",11,0)->primary()->unique();
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('nacionalidad',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autores');
    }
};