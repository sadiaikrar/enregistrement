<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escales', function (Blueprint $table) {
            $table->bigIncrements('num_escale');
            $table->dateTime('date_escale');
            $table->time('heure_depart_escale');
            $table->time('heure_arriver_escale');
            $table->time('duree_escale');
            $table->bigInteger('id_vol')->unsigned();
            $table->timestamps();
        });



        Schema::table('escales', function($table) {
            $table->foreign('id_vol')->references('id_vol')->on('vols');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escales');
    }
}
