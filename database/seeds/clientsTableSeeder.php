<?php

use Illuminate\Database\Seeder;

class clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
     
        DB::table('clients')->insert([
            'num_client' => 162,
            'email_client' =>'lasperanza@gmail.com ',
            'prenom_client' => 'assia',
            'nom_client' => 'ararbi',
            'num_passeport_client' => '123456789',
            'num_telephone_client'=> '0553',
            'civilite_client' => 'feminin',
            'date_naissance_client' => '1997-06-18',
            'code_postal_client' => '1234',
            'nationalite_client' =>'algerienne' ,
            'pays_client' => 'Algerie',
            'num_categorie'=>4





        ]);




        //
    }
}
