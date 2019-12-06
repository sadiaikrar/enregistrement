<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $faker = Faker\Factory::create();
        for ($i=0; $i <50 ; $i++)
         { 
            DB::table('Clients')->insert([
                'email_client' => $faker->email,
                'prenom_client' => $faker->firstName,
                'nom_client' => $faker->lastName,
                'num_passeport_client' => $faker->creditCardNumber,
                'num_telephone_client'=> $faker->e164PhoneNumber,
                'civilite_client' => "un truc",
                'date_expiration_passeport'=>'2020-12-03',
                'date_naissance_client' => '1997-06-18',
                'code_postal_client' => '1234',
                'nationalite_client' =>'algerienne' ,
                'pays_client' => 'Algerie',
                'num_categorie'=>4,
                ]);
                
            }



        //
    }
}
