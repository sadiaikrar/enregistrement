<?php

use App\Avion;
use Illuminate\Database\Seeder;

class AvionsTableSeeder extends Seeder
{
    // $num_avion= App\Avion->nom_avion[0].App\Avion->capacite_avion;
   
    
    public function run()
    {  
        // type 01
        for ($i=1; $i <31 ; $i++)
        { 
        DB::table('Avions')->insert([
            'num_avion'=>'B216',
            'nom_avion' => "Boeing 787-8 Dreamliner",
            'capacite_avion' =>216,
            
        ]);
        }   

        // type 02
        for ($i=31; $i <81 ; $i++)
        { 
        DB::table('Avions')->insert([
            'num_avion'=>'B166',
            'nom_avion' => "Boeing 737-800",
            'capacite_avion' =>166,
            
        ]);
        } 
       
        // type 03
        for ($i=81; $i <91 ; $i++)
        { 
        DB::table('Avions')->insert([
            'num_avion'=>'B154',
            'nom_avion' => "Boeing 737-max 8",
            'capacite_avion' =>154,
            
        ]);
        } 

        // type 04
        for ($i=91; $i <101 ; $i++)
        { 
        DB::table('Avions')->insert([
            'num_avion'=>'A150',
            'nom_avion' => "Airbus 320neo",
            'capacite_avion' =>150,
            
        ]);
        } 
    }   
    
}
