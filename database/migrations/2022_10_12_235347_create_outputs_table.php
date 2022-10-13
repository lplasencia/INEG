<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            $table->string('descripcion');
            $table->date('fecha');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('exit_category_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('exit_category_id')->references('id')->on('exit_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outputs');
    }
}
