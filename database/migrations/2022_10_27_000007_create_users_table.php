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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id',11)->primary()->unique();
            $table->string('doc_type',100)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('apellidos',100)->nullable();
            $table->string('apodo',100)->nullable();
            $table->string('direccion',200)->nullable();
            $table->float("telefono",11,0)->nullable();
            $table->string('nacionalidad',100)->nullable();
<<<<<<< HEAD
            $table->float('rol',1,0)->default(3);
            $table->string('email')->unique()->nullable();
=======
            $table->float('rol',1,0);
            $table->string('email')->unique();
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('updated_at',100)->nullable();
            $table->string('created_at',100)->nullable();

            
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
        Schema::dropIfExists('users');
    }
};