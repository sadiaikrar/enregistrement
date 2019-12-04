<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
       // $this->call(categoriesTableSeeder::class);
        $this->call(clientsTableSeeder::class);
        $this->call(volsTableSeeder::class);
        $this->call(aeroportsTableSeeder::class);
        $this->call(avionsTableSeeder::class);
    }
}
