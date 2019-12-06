<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Villes')->insert([
            "nom_ville" => "Alger",
            "pays_ville" => "Algerie",
           
        ]);

        DB::table('Villes')->insert([
            "nom_ville" => "Paris",
            "pays_ville" => "France",
          
        ]);

        DB::table('Villes')->insert([
            "nom_ville" => "New York",
            "pays_ville" => "Algerie",
            
        ]);

        DB::table('Villes')->insert([
            "nom_ville" => "Oslo",
            "pays_ville" => "Norvège",
          
        ]);
    }
}
