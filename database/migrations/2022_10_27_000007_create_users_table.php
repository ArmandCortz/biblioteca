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
        //create_users_table
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id',11)->primary()->unique();
            $table->string('doc_type',100);
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('apodo',100);
            $table->string('direccion',200);
            $table->float("telefono",11,0);
            $table->string('nacionalidad',100);
            $table->float('rol',1,0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table->foreign("rol")->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};