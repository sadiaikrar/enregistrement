<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagages', function (Blueprint $table) {
            $table->bigIncrements('num_bagage');
                   
            $table->integer('nb_bagage_main');   
            $table->integer('nb_bagage_accessoir');
            $table->integer('nb_bagage_soute');
            $table->double('prix_bagage_soute');
            $table->unsignedBigInteger('num_client');
          
        });
         
        
       
        Schema::table('bagages', function($table) {
            $table->foreign('num_client')->references('num_client')->on('clients');
        });
        


    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bagages');
    }

}