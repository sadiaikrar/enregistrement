<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AeroportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Aeroports')->insert([
        "code_aeroport" => "ALG",
        "nom_aeroport" => "HOUARI BOUMEDIENE AIRPORT",
        "code_postal_ville" => 1,
        ]);

       

        DB::table('Aeroports')->insert([
            "code_aeroport" => "CDG",
        
            "nom_aeroport" => "AÉROPORT DE PARIS-CHARLES-DE-GAULLE",
            "code_postal_ville" => 2,
            ]);

            DB::table('Aeroports')->insert([
                "code_aeroport" => "ALC",
            
                "nom_aeroport" => "AEROPORT D ALICANTE ",
                "code_postal_ville" => 3,
                ]);





    }
}
