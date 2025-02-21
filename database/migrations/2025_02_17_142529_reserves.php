<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reserves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table){
            $table->id();
            $table->string('reserveName');
            $table->timestamps();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('salle_id');
            $table->foreign('salle_id')->references('id')->on('salles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
