<?php

use Illuminate\Database\Seeder;

class Classe_avionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Classe_avions')->insert([
            'num_classe' => 2,
            'id_avion' =>2,
           
            ]);


        //
    }
}
