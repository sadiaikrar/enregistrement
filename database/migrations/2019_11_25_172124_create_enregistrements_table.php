<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnregistrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enregistrements', function (Blueprint $table) {

            $table->bigIncrements('num_enregistrement');
            $table->dateTime('date_enregistrement');
            $table->unsignedBigInteger('num_client')->index();
            $table->unsignedBigInteger('id_vol')->index();

            $table->string('num_siege')->index();
            $table->unsignedBigInteger('num_bagage')->index();
            $table->unsignedBigInteger('num_paiement')->index();

            $table->timestamps();
        });
        Schema::table('enregistrements', function($table) {
          $table->foreign('id_vol')->references('id')->on('vols');
          $table->foreign('num_bagage')->references('num_bagage')->on('bagages');
          $table->foreign('num_client')->references('num_client')->on('clients');
          $table->foreign('num_siege')->references('num_siege')->on('sieges');
          $table->foreign('num_paiement')->references('id')->on('paiements');
    });










    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enregistrements');
    }
}
