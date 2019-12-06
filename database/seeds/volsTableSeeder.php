<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i < 5; $i++) { 
          DB::table('Vols')->insert([
                'num_vol' =>'FA001',
                'date_depart' => '2020-12-15',
               'heure_depart'=> '22:00:00',
                'date_arriver' => '2020-12-16',
              'heure_arriver'=>  '01:00:00',
                'duree_vol' => '03:00',
                'num_ville_depart'=>1,
                'num_ville_arriver'=>2,
                
                'nombre_place_restante' => 50,
                
                'prix_vol' => '30000',
                "num_avion" => 'B111',
                "code_aeroport_depart" => "ALG",
                "code_aeroport_arriver" => "CDG",
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
                "num_terminal_depart"=>2,
                "num_terminal_arriver"=>3,
                "heure_embarquement"=>'07:30:00',
                "porte_embarquement"=>"p0",
                "prix_bagage_sup"=>200,
                
                
                
             ]);   
        //     }
        for ($i=2; $i <= 3; $i++) { 
            DB::table('Vols')->insert([
                'num_vol' =>'FA'.$i.$i.$i,
                'date_depart' => '2020-11-30',
               'heure_depart'=> '08:00:00',
                'date_arriver' => '2020-11-30',
              'heure_arriver'=>  '10:00:00',
                'duree_vol' => '02:00',
                // 'ville_depart'=> 'Paris', 
                // 'ville_arriver' => 'Alger',
                'num_ville_depart'=>2,
                'num_ville_arriver'=>1,
                'nombre_place_restante' => 50,
                'prix_vol' => '30000',
                "num_avion" => 'B'.$i.$i.$i,
                "code_aeroport_depart" => "CDG",
                "code_aeroport_arriver" => "ALG",
                "num_terminal_depart"=>2,
                "num_terminal_arriver"=>3,
                "heure_embarquement"=>'07:30:00',
                "porte_embarquement"=>"p".$i,
                "prix_bagage_sup"=>200,                
                // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
                
                
                
                ]);   
            }


    }

}