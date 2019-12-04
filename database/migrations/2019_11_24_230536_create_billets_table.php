<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->bigIncrements('num_billet');
            $table->double('prix_billet');

            $table->bigInteger('num_reservation')->unsigned();
            $table->timestamps();
            
        });



        Schema::table('billets', function($table) {
            $table->foreign('num_reservation')->references('num_reservation')->on('reservations');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }

}