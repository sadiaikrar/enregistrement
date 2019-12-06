<?php

use Illuminate\Database\Seeder;

class PersonnelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Personnels')->insert([
    
        
            'nom_personnel' =>"speranza",
            'prenom_personnel' =>"Divita",
            'date_naissance_personnel'=>"1997-06-18",
            'type_personnel'=>'pilote',
            'salair_personnel'=>50000,
            ]);



    }
}
