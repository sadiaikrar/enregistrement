<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->bigIncrements('id_vol');
            $table->string('num_vol',6);
            $table->dateTime('date_depart');
            $table->dateTime('date_arriver');
            $table->time('duree_vol');
            $table->string('ville_depart');
            $table->string('ville_arriver');
            $table->integer('nombre_place_restante');
            $table->integer('nombre_place_reserver');
            $table->double('prix_vol');
            $table->bigInteger('num_avion')->unsigned();
            $table->bigInteger('code_aeroport_depart')->unsigned();
            $table->bigInteger('code_aeroport_arriver')->unsigned();
          



            $table->timestamps();
        });
        Schema::table('vols', function($table) {
            $table->foreign('num_avion')->references('num_avion')->on('avions');
            $table->foreign('code_aeroport_depart')->references('code_aeroport')->on('aeroports');
            $table->foreign('code_aeroport_arriver')->references('code_aeroport')->on('aeroports');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
