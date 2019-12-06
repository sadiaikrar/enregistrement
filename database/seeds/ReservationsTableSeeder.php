<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i <3 ; $i++) 
        {
        DB::table('Reservations')->insert([
           'num_reservation'=>$i,
            'reference_reservation' => "FA".$i.$i.$i.$i.$i.$i,
            'date_reservation' => now(),
            'prix_reservation' =>300000,
            'type_reservation'=> "aller simple",
            'etat_reservation'=> true,
            'nombre_place_reserver'=>1,
            'num_classe'=>1,

            ]);

        //
    }
}
}