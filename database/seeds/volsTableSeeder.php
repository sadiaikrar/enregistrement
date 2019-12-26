<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($month=1;$month<7;$month++){
        for($day=1;$day<32;$day++){

          if(($day==28 & $month==2) | ($month%2==0 & $day==30) | $day==31){  
            $next_day=1;
            $next_month=$month+1;
            }else{
              $next_day=$day+1;
              $next_month=$month;
            }
          
        if(($month==1 & $day>14) | ($month==2 & $day<29) | ($month>2 & $month<6 & $day<31) | ($month!=2 & $day==31 & $month%2!=0 ) | ($month==6 & $day<16)){

          DB::table('Vols')->insert(['num_vol' =>'FA700', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '08:30:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '09:00:00', 'duree_vol' => '00:30',
                
                'num_ville_depart'=>51,'num_ville_arriver'=>52, 'ville_depart'=> 'Alger',  'ville_arriver' => 'Béjaia', 'nombre_place_restante' => 00,
                
                'prix_vol' => '2320', "id_avion" => 31,  "code_aeroport_depart" => "ALG","nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène",  "code_aeroport_arriver" => "BJA",
                "nom_aeroport_arriver"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane",

               
                "num_terminal_depart"=>2, "num_terminal_arriver"=>2, "heure_embarquement"=>'08:00:00',  "porte_embarquement"=>"p0", "prix_bagage_sup"=>200,
                
                 // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
                
             ]);   
        //     }
        DB::table('Vols')->insert(['num_vol' =>'FA701', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '16:50:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '17:20:00', 'duree_vol' => '00:30',
                
        'num_ville_depart'=>52,'num_ville_arriver'=>51, 'ville_depart'=> 'Béjaia',  'ville_arriver' => 'Alger', 'nombre_place_restante' => 00,
        
        'prix_vol' => '2320', "id_avion" => 31,  "code_aeroport_depart" => "BJA","code_aeroport_arriver" => "ALG","nom_aeroport_depart"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane","nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

       
        "num_terminal_depart"=>2, "num_terminal_arriver"=>2, "heure_embarquement"=>'16:20:00',  "porte_embarquement"=>"p0", "prix_bagage_sup"=>200,
        ]); 
// vol 2 Bejaia 
DB::table('Vols')->insert([
  
               'num_vol' =>'FA702', 
               'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
               'heure_depart'=> '13:50:00', 
               'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
               'heure_arriver'=>  '14:20:00', 
               'duree_vol' => '00:30',
                
                'num_ville_depart'=>51,
                'num_ville_arriver'=>52, 
                'ville_depart'=> 'Alger',  
                'ville_arriver' => 'Béjaia', 
                'nombre_place_restante' => 00,
                
                'prix_vol' => '2320',
                 "id_avion" => 32, 
                  "code_aeroport_depart" => "ALG",
                   "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
                   "code_aeroport_arriver" => "BJA",
                    "nom_aeroport_arriver"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane",

               
                "num_terminal_depart"=>3, 
                "num_terminal_arriver"=>3, 
                "heure_embarquement"=>'13:20:00',  
                "porte_embarquement"=>"p1", 
                "prix_bagage_sup"=>200,
                
                 // "created_at" => Carbon::now(),
                // "updated_at" => Carbon::now(),
                
             ]);   
        //     }
        DB::table('Vols')->insert(['num_vol' =>'FA703', 'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),'heure_depart'=> '15:25:00', 'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 'heure_arriver'=>  '16:55:00', 'duree_vol' => '00:30',
                
        'num_ville_depart'=>52,'num_ville_arriver'=>51, 'ville_depart'=> 'Béjaia',  'ville_arriver' => 'Alger', 'nombre_place_restante' => 00,
        
        'prix_vol' => '2320', "id_avion" => 32,  "code_aeroport_depart" => "BJA","code_aeroport_arriver" => "ALG","nom_aeroport_depart"=>"Aéroport de Béjaïa - Soummam - Abane Ramdane","nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

       
        "num_terminal_depart"=>3, "num_terminal_arriver"=>3, "heure_embarquement"=>'14:55:00',  "porte_embarquement"=>"p1", "prix_bagage_sup"=>200,


        ]); 
        



    // vol avc djanet 


    DB::table('Vols')->insert([
  
      'num_vol' =>'FA704', 
      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
      'heure_depart'=> '07:15:00', 
      'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
      'heure_arriver'=>  '10:45:00', 
      'duree_vol' => '03:30',
       
       'num_ville_depart'=>51,
       'num_ville_arriver'=>53, 
       'ville_depart'=> 'Alger',  
       'ville_arriver' => 'Djanet', 
       'nombre_place_restante' => 00,
       
       'prix_vol' => '11000',
        "id_avion" => 33, 
         "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
          "code_aeroport_arriver" => "DJG",
           "nom_aeroport_arriver"=>"Aéroport de Djanet - Tiska",

      
       "num_terminal_depart"=>2, 
       "num_terminal_arriver"=>2, 
       "heure_embarquement"=>'06:45:00',  
       "porte_embarquement"=>"p1", 
       "prix_bagage_sup"=>200,
       
        // "created_at" => Carbon::now(),
       // "updated_at" => Carbon::now(),
       
    ]);   
    DB::table('Vols')->insert([
  
      'num_vol' =>'FA705', 
      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
      'heure_depart'=> '02:15:00', 
      'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
      'heure_arriver'=>  '05:45:00', 
      'duree_vol' => '03:30',
       
       'num_ville_depart'=>53,
       'num_ville_arriver'=>51, 
       'ville_depart'=> 'Djanet',  
       'ville_arriver' => 'Alger', 
       'nombre_place_restante' => 00,
       
       'prix_vol' => '11000',
        "id_avion" => 33, 
         "code_aeroport_depart" => "DJG",
          "nom_aeroport_depart"=>"Aéroport de Djanet - Tiska", 
          "code_aeroport_arriver" => "ALG",
           "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

      
       "num_terminal_depart"=>3, 
       "num_terminal_arriver"=>3, 
       "heure_embarquement"=>'01:45:00',  
       "porte_embarquement"=>"p1", 
       "prix_bagage_sup"=>200,
       
        // "created_at" => Carbon::now(),
       // "updated_at" => Carbon::now(),
       
    ]);   
    DB::table('Vols')->insert([
  
      'num_vol' =>'FA706', 
      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
      'heure_depart'=> '23:00:00', 
      'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
      'heure_arriver'=>  '02:30:00', 
      'duree_vol' => '03:30',
       
       'num_ville_depart'=>51,
       'num_ville_arriver'=>53, 
       'ville_depart'=> 'Alger',  
       'ville_arriver' => 'Djanet', 
       'nombre_place_restante' => 00,
       
       'prix_vol' => '11000',
        "id_avion" => 34, 
         "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
          "code_aeroport_arriver" => "DJG",
           "nom_aeroport_arriver"=>"Aéroport de Djanet - Tiska",

      
       "num_terminal_depart"=>4, 
       "num_terminal_arriver"=>4, 
       "heure_embarquement"=>'22:30:00',  
       "porte_embarquement"=>"p1", 
       "prix_bagage_sup"=>200,
       
        // "created_at" => Carbon::now(),
       // "updated_at" => Carbon::now(),
       
    ]);   
    
    DB::table('Vols')->insert([
  
      'num_vol' =>'FA707', 
      'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
      'heure_depart'=> '04:15:00', 
      'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
      'heure_arriver'=>  '07:45:00', 
      'duree_vol' => '03:30',
       
       'num_ville_depart'=>53,
       'num_ville_arriver'=>51, 
       'ville_depart'=> 'Djanet',  
       'ville_arriver' => 'Alger', 
       'nombre_place_restante' => 00,
       
       'prix_vol' => '11000',
        "id_avion" => 34, 
         "code_aeroport_depart" => "DJG",
          "nom_aeroport_depart"=>"Aéroport de Djanet - Tiska", 
          "code_aeroport_arriver" => "ALG",
           "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

      
       "num_terminal_depart"=>3, 
       "num_terminal_arriver"=>3, 
       "heure_embarquement"=>'03:45:00',  
       "porte_embarquement"=>"p1", 
       "prix_bagage_sup"=>200,
       
        // "created_at" => Carbon::now(),
       // "updated_at" => Carbon::now(),
       
    ]);   
    

// illizi 
DB::table('Vols')->insert([
  
  'num_vol' =>'FA708', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '10:00:00', 
  'duree_vol' => '03:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>54, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Illizi', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '12100',
    "id_avion" => 35, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "VVZ",
       "nom_aeroport_arriver"=>"Aéroport d'Illizi - Takhamalt",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA709', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '14:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:00:00', 
  'duree_vol' => '03:00',
   
   'num_ville_depart'=>54,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Illizi',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '12100',
    "id_avion" => 35, 
     "code_aeroport_depart" => "VVZ",
      "nom_aeroport_depart"=>"Aéroport d'Illizi - Takhamalt", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'13:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
   ]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA710', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '13:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:00:00', 
  'duree_vol' => '03:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>54, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Illizi', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '12100',
    "id_avion" => 36, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "VVZ",
       "nom_aeroport_arriver"=>"Aéroport d'Illizi - Takhamalt",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'12:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA711', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '23:00:00', 
  'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '02:00:00', 
  'duree_vol' => '03:00',
   
   'num_ville_depart'=>54,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Illizi',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '12100',
    "id_avion" => 36, 
     "code_aeroport_depart" => "VVZ",
      "nom_aeroport_depart"=>"Aéroport d'Illizi - Takhamalt", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'22:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

// tamenrasset

DB::table('Vols')->insert([
  
  'num_vol' =>'FA712', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '12:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '14:50:00', 
  'duree_vol' => '02:25',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>55, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Tamanrasset', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '15900',
    "id_avion" => 37, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "TMR",
       "nom_aeroport_arriver"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'11:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 


DB::table('Vols')->insert([
  
  'num_vol' =>'FA713', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '22:00:00', 
  'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '00:25:00', 
  'duree_vol' => '02:25',
   
   'num_ville_depart'=>55,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Tamanrasset',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '15900',
    "id_avion" => 37, 
     "code_aeroport_depart" => "TMR",
      "nom_aeroport_depart"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'21:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA714', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '03:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '05:55:00', 
  'duree_vol' => '02:25',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>55, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Tamanrasset', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '15900',
    "id_avion" => 38, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "TMR",
       "nom_aeroport_arriver"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'02:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA715', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '09:45:00', 
  'duree_vol' => '02:25',
   
   'num_ville_depart'=>55,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Tamanrasset',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '15900',
    "id_avion" => 38, 
     "code_aeroport_depart" => "TMR",
      "nom_aeroport_depart"=>"Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 

// jijel 

DB::table('Vols')->insert([
  
  'num_vol' =>'FA717', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '07:55:00', 
  'duree_vol' => '00:55',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>56, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Jijel', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 39, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "GJL",
       "nom_aeroport_arriver"=>"Aéroport de Jijel - Ferhat Abbas",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA717', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '08:40:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '09:35:00', 
  'duree_vol' => '00:55',
   
   'num_ville_depart'=>56,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Jijel',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 39, 
     "code_aeroport_depart" => "GJL",
      "nom_aeroport_depart"=>"Aéroport de Jijel - Ferhat Abbas", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'08:10:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA718', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '15:55:00', 
  'duree_vol' => '00:55',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>56, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Jijel', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 40, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "GJL",
       "nom_aeroport_arriver"=>"Aéroport de Jijel - Ferhat Abbas",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

DB::table('Vols')->insert([
  
  'num_vol' =>'FA719', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '16:40:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '17:20:00', 
  'duree_vol' => '00:55',
   
   'num_ville_depart'=>56,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Jijel',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 40, 
     "code_aeroport_depart" => "GJL",
      "nom_aeroport_depart"=>"Aéroport de Jijel - Ferhat Abbas", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'16:10:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   

// annaba


DB::table('Vols')->insert([
  
  'num_vol' =>'FA720', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:30:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>57, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Annaba', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 41, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "AAE",
       "nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA721', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:40:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>57,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Annaba',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 41, 
     "code_aeroport_depart" => "AAE",
      "nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 



DB::table('Vols')->insert([
  
  'num_vol' =>'FA722', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '18:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '19:15:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>57, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Annaba', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 42, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "AAE",
       "nom_aeroport_arriver"=>"Aéroport d'Annaba - Rabah-Bitat",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'17:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA723', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '01:50:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '02:40:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>57,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Annaba',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 42, 
     "code_aeroport_depart" => "AAE",
      "nom_aeroport_depart"=>"Aéroport d'Annaba - Rabah-Bitat", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'01:20:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 

// constantine 

DB::table('Vols')->insert([
  
  'num_vol' =>'FA724', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '06:10:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '07:00:00', 
  'duree_vol' => '00:50',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>58, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Constantine', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 43, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "CZL",
       "nom_aeroport_arriver"=>"Aéroport de Constantine - Mohamed Boudiaf",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'05:40:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA725', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '09:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '10:05:00', 
  'duree_vol' => '00:50',
   
   'num_ville_depart'=>58,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Constantine',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 43, 
     "code_aeroport_depart" => "CZL",
      "nom_aeroport_depart"=>"Aéroport de Constantine - Mohamed Boudiaf", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'08:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 

DB::table('Vols')->insert([
  
  'num_vol' =>'FA726', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:20:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:10:00', 
  
  'duree_vol' => '00:50',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>58, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Constantine', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 44, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "CZL",
       "nom_aeroport_arriver"=>"Aéroport de Constantine - Mohamed Boudiaf",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:50:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA727', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '13:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '14:15:00', 
  'duree_vol' => '00:50',
   'num_ville_depart'=>58,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Constantine',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 44, 
     "code_aeroport_depart" => "CZL",
      "nom_aeroport_depart"=>"Aéroport de Constantine - Mohamed Boudiaf", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'12:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 


// Tlemcen

DB::table('Vols')->insert([
  
  'num_vol' =>'FA728', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:20:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:25:00', 
  'duree_vol' => '01:05',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>59, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Tlemcen', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 44, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "TLM",
       "nom_aeroport_arriver"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:50:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA729', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:10:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:40:00', 
  'duree_vol' => '01:05',
   
   'num_ville_depart'=>59,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Tlemcen',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 44, 
     "code_aeroport_depart" => "TLM",
      "nom_aeroport_depart"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:40:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]); 



DB::table('Vols')->insert([
  
  'num_vol' =>'FA730', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '14:25', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '15:30:00', 
  'duree_vol' => '01:05',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>59, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Tlemcen', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 45, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "TLM",
       "nom_aeroport_arriver"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'13:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA731', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '19:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '20:05:00', 
  'duree_vol' => '01:05',
   
   'num_ville_depart'=>59,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Tlemcen',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 45, 
     "code_aeroport_depart" => "TLM",
      "nom_aeroport_depart"=>"Aéroport de Tlemcen - Zenata - Messali El Hadj", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'18:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

// oran
DB::table('Vols')->insert([
  
  'num_vol' =>'FA732', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:10:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:10:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>60, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Oran', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 46, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "ORN",
       "nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA733', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '10:30:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '1:30:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>60,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Oran',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 46, 
     "code_aeroport_depart" => "ORN",
      "nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'10:00:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA734', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '11:05:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '12:05:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>60, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Oran', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 47, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "ORN",
       "nom_aeroport_arriver"=>"Aéroport d'Oran - Ahmed Ben Bella",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'10:35:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA735', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '22:50:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '23:50:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>60,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Oran',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 47, 
     "code_aeroport_depart" => "ORN",
      "nom_aeroport_depart"=>"Aéroport d'Oran - Ahmed Ben Bella", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'22:20:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);

// hassi messaoud

DB::table('Vols')->insert([
  
  'num_vol' =>'FA736', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '11:20:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '13:00:00', 
  'duree_vol' => '01:40',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>61, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Hassi Messaoud', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 48, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "HME",
       "nom_aeroport_arriver"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'10:50:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA737', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '17:30:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '19:10:00', 
  'duree_vol' => '01:40',
   
   'num_ville_depart'=>61,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Hassi Messaoud',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 48, 
     "code_aeroport_depart" => "HME",
      "nom_aeroport_depart"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'17:00:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA738', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:00:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:40:00', 
  'duree_vol' => '01:40',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>61, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Hassi Messaoud', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 49, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "HME",
       "nom_aeroport_arriver"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:30:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA739', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '00:25:00', 
  'date_arriver' => "2020-".str_pad($next_month,2,'0',STR_PAD_LEFT)."-".str_pad($next_day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '02:05:00', 
  'duree_vol' => '01:40',
   
   'num_ville_depart'=>61,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Hassi Messaoud',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 49, 
     "code_aeroport_depart" => "HME",
      "nom_aeroport_depart"=>"Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'23:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
// el oued
DB::table('Vols')->insert([
  
  'num_vol' =>'FA740', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '08:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '09:45:00', 
  'duree_vol' => '01:30',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>62, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'El Oued', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 50, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "ELU",
       "nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'07:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA741', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '14:45:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:15:00', 
  'duree_vol' => '01:30',
   
   'num_ville_depart'=>62,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'El Oued',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 50, 
     "code_aeroport_depart" => "ELU",
      "nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:15:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA742', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '05:20:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '06:50:00', 
  'duree_vol' => '01:30',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>62, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'El Oued', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 51, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "ELU",
       "nom_aeroport_arriver"=>"Aéroport d'El Oued - Guemar",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'04:50:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA743', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '12:50:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '14:20:00', 
  'duree_vol' => '01:30',
   
   'num_ville_depart'=>62,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'El Oued',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 51, 
     "code_aeroport_depart" => "ELU",
      "nom_aeroport_depart"=>"Aéroport d'El Oued - Guemar", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'12:20:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
// Bayadh
DB::table('Vols')->insert([
  
  'num_vol' =>'FA744', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:30:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>63, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'El Bayadh', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 52, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "EBH",
       "nom_aeroport_arriver"=>"Aéroport d'El Bayadh",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA745', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:40:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>63,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'El Bayadh',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 52, 
     "code_aeroport_depart" => "EBH",
      "nom_aeroport_depart"=>"Aéroport d'El Bayadh", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA746', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '07:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '08:30:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>63, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'El Bayadh', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 53, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "EBH",
       "nom_aeroport_arriver"=>"Aéroport d'El Bayadh",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'06:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA747', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:40:00', 
  'duree_vol' => '01:15',
   
   'num_ville_depart'=>63,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'El Bayadh',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 53, 
     "code_aeroport_depart" => "EBH",
      "nom_aeroport_depart"=>"Aéroport d'El Bayadh", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'14:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
// setif
DB::table('Vols')->insert([
  
  'num_vol' =>'FA748', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '06:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '06:45:00', 
  'duree_vol' => '00:30',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>64, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Sétif', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 54, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "QSF",
       "nom_aeroport_arriver"=>"Aéroport de Sétif - 8 Mai 1945",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'05:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA749', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '12:25:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '12:55:00', 
  'duree_vol' => '00:30',
   
   'num_ville_depart'=>64,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Sétif',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 54, 
     "code_aeroport_depart" => "QSF",
      "nom_aeroport_depart"=>"Aéroport de Sétif - 8 Mai 1945", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'11:55:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA750', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '10:55:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '11:25:00', 
  'duree_vol' => '00:30',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>64, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Sétif', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 55, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "QSF",
       "nom_aeroport_arriver"=>"Aéroport de Sétif - 8 Mai 1945",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'10:25:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA751', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '20:40:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '21:10:00', 
  'duree_vol' => '00:30',
   
   'num_ville_depart'=>64,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Sétif',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 55, 
     "code_aeroport_depart" => "QSF",
      "nom_aeroport_depart"=>"Aéroport de Sétif - 8 Mai 1945", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'20:10:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
// Biskra

DB::table('Vols')->insert([
  
  'num_vol' =>'FA752', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '10:35:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '11:35:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>65, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Biskra', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 56, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "BSK",
       "nom_aeroport_arriver"=>"Aéroport de Biskra - Mohamed Khider",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'10:05:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA753', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '15:35:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '16:35:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>65,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Biskra',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 56, 
     "code_aeroport_depart" => "BSK",
      "nom_aeroport_depart"=>"Aéroport de Biskra - Mohamed Khider", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'15:05:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);


DB::table('Vols')->insert([
  
  'num_vol' =>'FA754', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '09:10:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '10:10:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>51,
   'num_ville_arriver'=>65, 
   'ville_depart'=> 'Alger',  
   'ville_arriver' => 'Biskra', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 57, 
     "code_aeroport_depart" => "ALG",
      "nom_aeroport_depart"=>"Aéroport d’Alger-Houari-Boumédiène", 
      "code_aeroport_arriver" => "BSK",
       "nom_aeroport_arriver"=>"Aéroport de Biskra - Mohamed Khider",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'08:40:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);   


DB::table('Vols')->insert([
  
  'num_vol' =>'FA755', 
  'date_depart' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT),
  'heure_depart'=> '12:15:00', 
  'date_arriver' => "2020-".str_pad($month,2,'0',STR_PAD_LEFT)."-".str_pad($day,2,'0',STR_PAD_LEFT), 
  'heure_arriver'=>  '13:15:00', 
  'duree_vol' => '01:00',
   
   'num_ville_depart'=>65,
   'num_ville_arriver'=>51, 
   'ville_depart'=> 'Biskra',  
   'ville_arriver' => 'Alger', 
   'nombre_place_restante' => 00,
   
   'prix_vol' => '3120',
    "id_avion" => 57, 
     "code_aeroport_depart" => "BSK",
      "nom_aeroport_depart"=>"Aéroport de Biskra - Mohamed Khider", 
      "code_aeroport_arriver" => "ALG",
       "nom_aeroport_arriver"=>"Aéroport d’Alger-Houari-Boumédiène",

  
   "num_terminal_depart"=>4, 
   "num_terminal_arriver"=>4, 
   "heure_embarquement"=>'11:45:00',  
   "porte_embarquement"=>"p1", 
   "prix_bagage_sup"=>200,
   
    // "created_at" => Carbon::now(),
   // "updated_at" => Carbon::now(),
   
]);
        }

       }
      }
    
  } 
}