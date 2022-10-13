<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permit_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permit_id');
            $table->unsignedBigInteger('user_id');
 
            $table->timestamps();

            $table->foreign('permit_id')->references('id')->on('permits')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('permit_details');
    }
}
