<?php

use Illuminate\Database\Seeder;

class avionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <10 ; $i++) 
        { 
            # code...
        
        DB::table('avions')->insert([
            'num_avion' => Str::random(5),
            'nom_avion' =>Str::random(5),
            'capacite_avion' =>300,
            ]);
        }
    }
}
