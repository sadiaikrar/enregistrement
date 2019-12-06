<?php

use Illuminate\Database\Seeder;

class Carte_creditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Carte_credits')->insert([
        
        "date_expiration" => '2030-06-20 00:00:00',
        "propreitaire_carte" => 'speranza',
        // "created_at" => Carbon::now(),
        // "updated_at" => Carbon::now(),
      ]);


        }
}
