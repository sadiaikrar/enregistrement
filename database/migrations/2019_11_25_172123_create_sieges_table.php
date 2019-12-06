<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieges', function (Blueprint $table) {
            $table->string('num_siege')->primary();
            $table->boolean('etat_siege');
            $table->bigInteger('num_classe')->unsigned();
            $table->string('num_avion');
        });



        Schema::table('sieges', function($table) {
            $table->foreign('num_classe')->references('num_classe')->on('classes');
            $table->foreign('num_avion')->references('num_avion')->on('avions');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sieges');
    }
}
