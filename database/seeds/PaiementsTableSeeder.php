<?php

use Illuminate\Database\Seeder;

class PaiementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('Paiements')->insert([

       'date_paiement'=> "2019-11-27 07:30:00",
       'montant_paiement'=> 40000000,
       'mode_paiement'=> "Master_card",
       'num_carte_credit'=>1,

        ]);


    }
}
