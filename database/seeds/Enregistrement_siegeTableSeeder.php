<?php

use Illuminate\Database\Seeder;

class Enregistrement_siegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enregistrement_sieges')->insert([
            'num_enregistrement'=>2,
            'num_siege'=>1,
            // 'id_siege' =>1,
           
            ]); 



        
    }
}
