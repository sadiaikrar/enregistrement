<?php

use App\Avion;
use Illuminate\Database\Seeder;

class AvionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    
    

 
    // $num_avion= App\Avion->nom_avion[0].App\Avion->capacite_avion;
   
    
    public function run()
    {  
        
        for ($i=1; $i <9 ; $i++)
        { 
        DB::table('Avions')->insert([
            'num_avion'=>'B'.$i.$i.$i,
            'nom_avion' => "BOING AIRBUS",
            'capacite_avion' =>300,
            'nb_bagage_max'=>$i.$i.$i,
        ]);
        }   
    }   
    
}
