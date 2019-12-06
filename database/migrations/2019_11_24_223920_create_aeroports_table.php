<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeroportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeroports', function (Blueprint $table) {
            $table->string('code_aeroport',3)->primary();
            $table->string('nom_aeroport');
            $table->bigInteger('code_postal_ville')->unsigned();
        });


        Schema::table('aeroports', function($table) {
            $table->foreign('code_postal_ville')->references('code_postal_ville')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aeroports');
    }
}
