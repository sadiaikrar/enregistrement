<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'num_categorie' => 3,
            'nom_categorie' => 'bebe',
            'prix_categorie' =>0.8 
            ]);
        DB::table('categories')->insert([
            'num_categorie' => 4,
            'nom_categorie' =>'adulte' ,
            'prix_categorie' => 1 
            ]);
        DB::table('categories')->insert([
            'num_categorie' => 5,
            'nom_categorie' =>'enfant' ,
            'prix_categorie' => 1 
            ]);

          
    }
}
