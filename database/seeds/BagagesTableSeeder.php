<?php

use Illuminate\Database\Seeder;

class BagagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker\Factory::create();
        for ($i=2; $i <5 ; $i++) 
        {
        DB::table('Bagages')->insert([
    
            'num_bagage'=>$i,
            'nb_bagage_soute'=>$i,
            'nb_bagage_main' =>1,
            'nb_bagage_accessoir'=>1,
            'prix_bagage_soute'=>40,
            
            
            ]);




        //
    }
}
}