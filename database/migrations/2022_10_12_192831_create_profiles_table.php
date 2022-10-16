<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('user_id');
 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        // Schema::create('profiles', function (Blueprint $table) {
        //     $table->foreignId('user_id')->references('id')->on('users')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
