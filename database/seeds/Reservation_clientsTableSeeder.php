<?php

use Illuminate\Database\Seeder;

class Reservation_clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
      
        DB::table('Reservation_clients')->insert([
            
            'num_reservation' => 1,
            'num_client' =>2,
            ]);




    }
}
