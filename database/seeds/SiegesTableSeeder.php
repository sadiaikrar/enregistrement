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

 //$type1 = array('A','B','C','D','E','F','J','K','L');
$type234 = array('A','B','C','D','E','F');


// Type 1

for($k=1 ; $k<31 ; $k++){
for($i=1 ; $i<40 ; $i++){
    for($j=0 ; $j< 6 ; $j++){

        if($i<10 & $j!= 2 & $j!=3 ){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>3,'id_avion'=>$k]);
        }
        else if (9<$i & $i<22){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>2,'id_avion'=>$k]);
        }
        else if(21<$i){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>1,'id_avion'=>$k]);
        }
    }
  }
}



// Type 2


for($k=31 ; $k<81 ; $k++){
    for($i=1 ; $i<32 ; $i++){
        for($j=0 ; $j< 6 ; $j++){

        if($i<5 & $j!= 2 & $j!=3  ){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>3,'id_avion'=>$k]);
        }
        else if (5<$i & $i<14){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>2,'id_avion'=>$k]);
        }
        else if(14<$i){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>1,'id_avion'=>$k]);
        }
    }
  }
}



// Type 3


for($k=81 ; $k<91 ; $k++){
    for($i=1 ; $i<30 ; $i++){
        for($j=0 ; $j< 6 ; $j++){

        if($i<5 & $j!= 2 & $j!=3  ){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>3,'id_avion'=>$k]);
        }
        else if (5<$i & $i<14){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>2,'id_avion'=>$k]);
        }
        else if(14<$i){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>1,'id_avion'=>$k]);
        }
    }
  }
}



// Type 4


for($k=91 ; $k<101 ; $k++){
    for($i=1 ; $i<29 ; $i++){
        for($j=0 ; $j< 6 ; $j++){

        if($i<4 & $j!= 2 & $j!=3  ){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>3,'id_avion'=>$k]);
        }
        else if (4<$i & $i<12){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>2,'id_avion'=>$k]);
        }
        else if(12<$i){
            DB::table('Sieges')->insert(['num_siege'=>$type234[$j].str_pad($i,2,'0',STR_PAD_LEFT),'num_classe'=>1,'id_avion'=>$k]);
        }
    }
  }
}
        
    }


    }
