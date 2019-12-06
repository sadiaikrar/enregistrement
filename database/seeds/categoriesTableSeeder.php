<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            'num_categorie' => 3,
            'nom_categorie' => 'bebe',
            'remise_categorie' =>0.8 
            ]);
        DB::table('Categories')->insert([
            'num_categorie' => 4,
            'nom_categorie' =>'adulte' ,
            'remise_categorie' => 1 
            ]);
        DB::table('Categories')->insert([
            'num_categorie' => 5,
            'nom_categorie' =>'enfant' ,
            'remise_categorie' => 1 
            ]);

          
    }
}
