<?php

use Illuminate\Database\Seeder;

class EscalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Escales')->insert([
        'date_escale'=>"2019-11-30 08:00:00",
       'heure_depart_escale'=>"09:30:00",
        'heure_arriver_escale'=>"09:00:00",
        'duree_escale'=>"01:00:00",
        'id_vol'=>'3',
        'code_aeroport'=>"ALG",
        ]);

    }
}
