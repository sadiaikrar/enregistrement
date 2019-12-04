<?php

use Illuminate\Database\Seeder;

class volsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vols')->insert([
            'id_vol' => 62,
            'num_vol' =>'kd654',
            'date_depart' => '2019-11-30 08:00:00',
            'date_arriver' => '2019-11-30 10:00:00',
            'duree_vol' => '02:00',
            'ville_depart'=> 'alger', 
            'ville_arriver' => 'milan',
           
            'nombre_place_restante' => 5,
            'nombre_place_reserver' => 1,
            'prix_vol' => '30000',
             
              
     

            ]);



    }
}
