<?php

use Illuminate\Database\Seeder;

class SiegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();
        // $t=['A','B','C','D','E','F'];
        for ($i=1; $i <3 ; $i++) 
        {
           

        DB::table('Sieges')->insert([
          
            // 'num_siege'=>$i.$i.$t[$i],
            'num_siege'=>$i.$i.'B',
            'etat_siege' =>true,
            'num_classe' =>$i,
            'num_avion'=>'B'.$i.$i.$i,
            ]);
        }
    }


    }
