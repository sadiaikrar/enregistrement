<?php

use Illuminate\Database\Seeder;
use Symfony\Component\VarDumper\VarDumper;

class EnregistrementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // for ($i=2; $i <2; $i++) 
        // {
        DB::table('enregistrements')->insert([
            'num_enregistrement'=>2,
            'num_client' =>3,
            'date_enregistrement' => now(),
            // 'id_siege' =>1,
            'id_vol'=>2,
       
            'num_paiement'=>1,
            ]);  

            DB::table('enregistrements')->insert([
                'num_enregistrement'=>3,
                'num_client' =>1,
                'date_enregistrement' => now(),
                // 'id_siege' =>1,
                'id_vol'=>2,
           
                'num_paiement'=>1,
                ]);  

                DB::table('enregistrements')->insert([
                    'num_enregistrement'=>4,
                    'num_client' =>2,
                    'date_enregistrement' => now(),
                    // 'id_siege' =>1,
                    'id_vol'=>2,
               
                    'num_paiement'=>1,
                    ]);  






    }
}
