<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Classes')->insert([
            'num_classe' => 1,
            'nom_classe' => 'economique',
            'remise_classe' =>1,
            ]);

            DB::table('Classes')->insert([
                'num_classe' => 2,
                'nom_classe' => 'premiere',
                'remise_classe' =>2,
                ]);
                DB::table('Classes')->insert([
                    'num_classe' => 3,
                    'nom_classe' => 'affaire',
                    'remise_classe' =>1.5,
                    ]);








    }
}
