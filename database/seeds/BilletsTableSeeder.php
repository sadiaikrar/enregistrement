<?php

use Illuminate\Database\Seeder;

class BilletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
   
        
        DB::table('Billets')->insert([

            'num_billet'=>2131911111111,
            'num_reservation' => 1,
            'num_client' =>2,
            ]);




    }
}
