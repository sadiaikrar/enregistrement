<?php

use Illuminate\Database\Seeder;

class Personnel_volsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Personnel_vols')->insert([
    
            'id_personnel'=>1,
            'id_vol'=>3,
            ]);
            DB::table('Personnel_vols')->insert([
    
                'id_personnel'=>1,
                'id_vol'=>2,
                ]);




    }
}
