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
        //create_rols_table
        Schema::create('roles', function (Blueprint $table) {
            $table->float("id",11,0)->primary()->unique();
<<<<<<< HEAD
            $table->string("nombre",20);
            $table->string("descripcion",200);
=======
            $table->string("nombre",100);
            $table->string("descripcion",200)->nullable();
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};