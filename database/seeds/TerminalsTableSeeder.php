<?php

use Illuminate\Database\Seeder;

class TerminalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i <=4 ; $i++) 
        {
        DB::table('Terminals')->insert([
            "id" =>$i ,
            "nom_terminal" => "t".$i,
            'code_aeroport'=>"ALG",
           
        ]);
        }



        }
}
