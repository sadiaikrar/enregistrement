<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AeroportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('Aeroports')->insert([
        //     "code_aeroport" => "ALG",
        //     "nom_aeroport" => "HOUARI BOUMEDIENE",
        //     "code_postal_ville" => 1,
        // ]);

        //Europe:
        //France:
        //Paris:

        DB::table('Aeroports')->insert([
            "code_aeroport" => "CDG",
            "nom_aeroport" => "Aéroport de Paris-Charles-de-Gaulle",
            "id_ville" => 1,
        ]);

        // DB::table('Aeroports')->insert([
        //     "code_aeroport" => "ALC",

        //     "nom_aeroport" => "AEROPORT D ALICANTE ",
        //     "code_postal_ville" => 3,
        //     ]);

        DB::table('Aeroports')->insert([
            "code_aeroport" => "ORY",
            "nom_aeroport" => "Aéroport de Paris-Orly ",
            // "code_postal_ville" =>75000,
            "id_ville" => 1,

        ]);

        DB::table('Aeroports')->insert([
            "code_aeroport" => "BVA",
            "nom_aeroport" => "Aéroport de Paris-Beauvais-Tillé ",
            // "code_postal_ville" =>75000,
            "id_ville" => 1,

        ]);

        //Lyon:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "LYS",
            "nom_aeroport" => "Aéroport de Lyon-Saint-Exupéry ",
            // "code_postal_ville" =>69000,
            "id_ville" => 2,
        ]);
        //Marseille:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "MRS",
            "nom_aeroport" => "Aéroport de Marseille Provence",
            // "code_postal_ville" =>13000,
            "id_ville" => 3,
        ]);

        //Toulouse
        DB::table('Aeroports')->insert([
            "code_aeroport" => "TLS",
            "nom_aeroport" => "Aéroport de Toulouse-Blagnac",
            //"code_postal_ville" =>31000,
            "id_ville" => 4,
        ]);

        //Nice:

        DB::table('Aeroports')->insert([
            "code_aeroport" => "NCE",
            "nom_aeroport" => "Aéroport de Nice-Côte d'Azur",
            //"code_postal_ville" =>06000,
            "id_ville" => 5,

        ]);
        //Bordeaux

        DB::table('Aeroports')->insert([
            "code_aeroport" => "BOD",
            "nom_aeroport" => "Aéroport de Bordeaux-Mérignac",
            "id_ville" => 6,
        ]);
        //---------------------         
        //Allemagne
        //Francfort:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "FRA",
            "nom_aeroport" => "Aéroport de Francfort-sur-le-Main",
            // "code_postal_ville" =>60311,
            "id_ville" => 7
        ]);

        //Berlin:    
        DB::table('Aeroports')->insert([
            "code_aeroport" => "SXF",
            "nom_aeroport" => "Aéroport de Berlin-Schönefeld",
            //"code_postal_ville" =>10115,
            "id_ville" => 8
        ]);
        //-------------------------           
        //ITALI:**************
        //ROME:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "FCO",
            "nom_aeroport" => "Aéroport Léonard-de-Vinci",
            //"code_postal_ville" =>00100,
            "id_ville" => 9
        ]);

        //Milan:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "MXP",
            "nom_aeroport" => "Aéroport de Milan Malpensa",
            // "code_postal_ville" =>20019,
            "id_ville" => 10
        ]);

        //Venise:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "VCE",
            "nom_aeroport" => "Aéroport de Venise-Marco-Polo",
            // "code_postal_ville" =>30100,
            "id_ville" => 11
        ]);

        //------------------
        //Espagne
        //Madrid:

        DB::table('Aeroports')->insert([
            "code_aeroport" => "MAD",
            "nom_aeroport" => "Aéroport Adolfo Suárez Madrid-Barajas",
            //"code_postal_ville" =>28001,
            "id_ville" => 12
        ]);
        //Barcelon:

        DB::table('Aeroports')->insert([
            "code_aeroport" => "BCN",
            "nom_aeroport" => "Aéroport Josep Tarradellas Barcelone-El Prat",
            //"code_postal_ville" =>"08001",
            "id_ville" => 13
        ]);
        //------------
        //Russie
        //Moscou:
        DB::table('Aeroports')->insert([
            "code_aeroport" => "DME",
            "nom_aeroport" => "Aéroport de Moscou-Domodédovo",
            //"code_postal_ville" =>"101000",
            "id_ville" => 14
        ]);
        //------------
        //Royaume-Uni
        //	Londres
        DB::table('Aeroports')->insert([
            "code_aeroport" => "LHR",
            "nom_aeroport" => "Aéroport de Londres Heathrow",
            // "code_postal_ville" =>"EC1A",
            "id_ville" => 15
        ]);

        //Manchester 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "MAN",
            "nom_aeroport" => "Aéroport de Manchester",
            // "code_postal_ville" =>"M1",
            "id_ville" => 16
        ]);

        //------------------
        //SUISSE
        //Genève
        DB::table('Aeroports')->insert([
            "code_aeroport" => "GVA",
            "nom_aeroport" => "Aéroport international de Genève",
            //  "code_postal_ville" =>"1201",
            "id_ville" => 17
        ]);
        // //Zurich
        // DB::table('Aeroports')->insert([
        //     "code_aeroport" => "ZRH",
        //     "nom_aeroport" => "Zurich",
        //     "code_postal_ville" => 3,
        // ]);
        //------
        //grèce
        //Athènes
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ATH",
            "nom_aeroport" => "Aéroport international d'Athènes Elefthérios-Venizélos",
            //"code_postal_ville" =>"10431",
            "id_ville" => 18
        ]);
        //------------
        //Turquie
        //	Istanbul
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ISL",
            "nom_aeroport" => "Aéroport Atatürk d'Istanbul",
            //"code_postal_ville" =>"34010",
            "id_ville" => 19
        ]);
        //----------
        // Portugal
        //Lisbonne

        DB::table('Aeroports')->insert([
            "code_aeroport" => "LIS",
            "nom_aeroport" => "Aéroport Humberto Delgado de Lisbonne",
            // "code_postal_ville" =>"1000",
            "id_ville" => 20
        ]);
        //--------
        //Pays-Bas
        //	Amsterdam

        DB::table('Aeroports')->insert([
            "code_aeroport" => "AMS",
            "nom_aeroport" => "Aéroport d'Amsterdam-Schiphol",
            //"code_postal_ville" =>"1008 DG",
            "id_ville" => 21
        ]);

        //------------
        // Belgique  Bruxelles,

        DB::table('Aeroports')->insert([
            "code_aeroport" => "BRU",
            "nom_aeroport" => "Aéroport de Bruxelles-National",
            //"code_postal_ville" =>"1047",
            "id_ville" => 22
        ]);
        //--
        //Autriche Vienne
        DB::table('Aeroports')->insert([
            "code_aeroport" => "VIE",
            "nom_aeroport" => "Aéroport de Vienne-Schwechat",
            //"code_postal_ville" =>"1010",
            "id_ville" => 23
        ]);

        //-------
        // Hongrie Budapest
        DB::table('Aeroports')->insert([
            "code_aeroport" => "BUD",
            "nom_aeroport" => "Aéroport international de Budapest-Ferenc Liszt",
            //"code_postal_ville" =>"1007",
            "id_ville" => 24
        ]);

        //--------
        //Denmark 	Copenhague
        DB::table('Aeroports')->insert([
            "code_aeroport" => "CPH",
            "nom_aeroport" => "Aéroport de Copenhague",
            // "code_postal_ville" =>"1050",
            "id_ville" => 25
        ]);
        //--------------------
        //Amerique
        //Canada Montréal
        DB::table('Aeroports')->insert([
            "code_aeroport" => "YMX",
            "nom_aeroport" => "Aéroport international Montréal-Mirabel",
            // "code_postal_ville" =>"11290",
            "id_ville" => 26
        ]);
        //États-Unis New York
        DB::table('Aeroports')->insert([
            "code_aeroport" => "JFK",
            "nom_aeroport" => "Aéroport international John-F.-Kennedy de New York",
            //"code_postal_ville" =>"10001",
            "id_ville" => 27
        ]);
        //États-Unis San Francisco (Californie)
        DB::table('Aeroports')->insert([
            "code_aeroport" => "SFO",
            "nom_aeroport" => "Aéroport international de San Francisco",
            //"code_postal_ville" =>"94016",
            "id_ville" => 28
        ]);
        //---------------
        //Asiiiiiiiiiiiiiiiieeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
        // Jordanie Amman
        DB::table('Aeroports')->insert([
            "code_aeroport" => "AMM",
            "nom_aeroport" => "Aéroport international Queen Alia مطار الملكة علياء الدولي
            Matar Al-Malikah Alia Ad-Dowali",
            //  "code_postal_ville" =>"11110",
            "id_ville" => 29
        ]);
        //  Chine Pékin
        DB::table('Aeroports')->insert([
            "code_aeroport" => "PEK",
            "nom_aeroport" => "Aéroport international de Pékin-Capitale",
            //"code_postal_ville" =>"100010",
            "id_ville" => 30
        ]);
        //  QATAR Doha
        DB::table('Aeroports')->insert([
            "code_aeroport" => "DOH",
            "nom_aeroport" => "Aéroport international Hamad",
            //"code_postal_ville" =>"15054",
            "id_ville" => 31
        ]);
        // Émirats arabes unis Abou Dabi

        DB::table('Aeroports')->insert([
            "code_aeroport" => "AUH",
            "nom_aeroport" => "Aéroport international d'Abou Dabi مطار أبو ظبي الدولي",
            // "code_postal_ville" =>"4039",
            "id_ville" => 32
        ]);
        // Liban Beyrouth

        DB::table('Aeroports')->insert([
            "code_aeroport" => "BEY",
            "nom_aeroport" => "Aéroport international de Beyrouth - Rafic Hariri",
            // "code_postal_ville" =>"95444",
            "id_ville" => 33
        ]);
        // Japon Tokyo

        DB::table('Aeroports')->insert([
            "code_aeroport" => "HND",
            "nom_aeroport" => "Aéroport international Haneda de Tokyo",
            //"code_postal_ville" =>"206-0000",
            "id_ville" => 34
        ]);

        // Inde Delhi

        DB::table('Aeroports')->insert([
            "code_aeroport" => "DEL",
            "nom_aeroport" => "Aéroport international Indira-Gandhi",
            // "code_postal_ville" =>"110001",
            "id_ville" => 35
        ]);
        // Singapour Singapour

        DB::table('Aeroports')->insert([
            "code_aeroport" => "SIN",
            "nom_aeroport" => "Aéroport de Singapour-Changi",
            // "code_postal_ville" =>"618826",
            "id_ville" => 36
        ]);

        //Malaisie Kuala Lumpur
        DB::table('Aeroports')->insert([
            "code_aeroport" => "KUL",
            "nom_aeroport" => "Aéroport international de Kuala Lumpur",
            //"code_postal_ville" =>"43200",
            "id_ville" => 37
        ]);

        //Thaïlande  Bangkok 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "BKK",
            "nom_aeroport" => "Aéroport de Bangkok-Suvarnabhumi",
            // "code_postal_ville" =>"10100",
            "id_ville" => 38
        ]);


        //Corée du Sud Grand Séoul
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ICN",
            "nom_aeroport" => "Aéroport international d'Incheon",
            //"code_postal_ville" =>"100-011",
            "id_ville" => 39
        ]);
        //Viêt Nam 	Hanoï
        DB::table('Aeroports')->insert([
            "code_aeroport" => "HAN",
            "nom_aeroport" => "Aéroport international de Nội Bài",
            // "code_postal_ville" =>"100000",
            "id_ville" => 40
        ]);
        //---------------------
        //Afriqueeeeeeeeeeeeeeeeeeeeeee
        //Tunisie Tunis
        DB::table('Aeroports')->insert([
            "code_aeroport" => "TUN",
            "nom_aeroport" => "Aéroport international de Tunis-Carthage",
            // "code_postal_ville" =>"20**",
            "id_ville" => 41
        ]);
        //Maroc Casablanca
        DB::table('Aeroports')->insert([
            "code_aeroport" => "CMN",
            "nom_aeroport" => "Aéroport Mohammed-V de Casablanca",
            //"code_postal_ville" =>"20000",
            "id_ville" => 42
        ]);


        // Mali Bamako
        DB::table('Aeroports')->insert([
            "code_aeroport" => "BKO",
            "nom_aeroport" => "Aéroport international Modibo Keïta",
            //"code_postal_ville" =>"91091",
            "id_ville" => 43
        ]);

        // Afrique de sud Johannesbourg
        DB::table('Aeroports')->insert([
            "code_aeroport" => "JNB",
            "nom_aeroport" => "Aéroport international OR Tambo",
            // "code_postal_ville" =>"2001",
            "id_ville" => 44
        ]);

        // Sénégal Diass 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "DSS",
            "nom_aeroport" => "Aéroport international Blaise-Diagne",
            //"code_postal_ville" => 3,
            "id_ville" => 45
        ]);
        //   Burkina Faso Ouagadougou
        DB::table('Aeroports')->insert([
            "code_aeroport" => "OUA",
            "nom_aeroport" => "Aéroport international de Ouagadougou",
            //"code_postal_ville" => 3,
            "id_ville" => 46

        ]);
        // Kenya Nairobi 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "NBO",
            "nom_aeroport" => "Aéroport international Jomo-Kenyatta",
            //"code_postal_ville" => 3,
            "id_ville" => 47

        ]);
        // Côte d'Ivoire	Abidjan
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ABJ",
            "nom_aeroport" => "Aéroport international Félix-Houphouët-Boigny",
            // "code_postal_ville" => 3,
            "id_ville" => 48
        ]);
        // Mauritanie Nouakchott
        DB::table('Aeroports')->insert([
            "code_aeroport" => "NKC",
            "nom_aeroport" => "Aéroport international de Nouakchott-Oumtounsy",
            //"code_postal_ville" => 3,
            "id_ville" => 49
        ]);

        // Soudan	Khartoum
        DB::table('Aeroports')->insert([
            "code_aeroport" => "KRT",
            "nom_aeroport" => "Aéroport international de Khartoum",
            // "code_postal_ville" => 3,
            "id_ville" => 50
        ]);
        //Nationallll 
        // ALgerie 
        //Alger 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ALG",
            "nom_aeroport" => "Aéroport d’Alger-Houari-Boumédiène",
            // "code_postal_ville" => 3,
            "id_ville" => 51

        ]);
        //Béjaïa
        DB::table('Aeroports')->insert([
            "code_aeroport" => "BJA",
            "nom_aeroport" => "Aéroport de Béjaïa - Soummam - Abane Ramdane",
            // "code_postal_ville" => 3,
            "id_ville" => 52

        ]);
        //Djanet
        DB::table('Aeroports')->insert([
            "code_aeroport" => "DJG",
            "nom_aeroport" => "Aéroport de Djanet - Tiska",
            // "code_postal_ville" => 3,
            "id_ville" => 53
            //
        ]);
        //Illizi Ntional 
        DB::table('Aeroports')->insert([
            "code_aeroport" => "VVZ",
            "nom_aeroport" => "Aéroport d'Illizi - Takhamalt",
            // "code_postal_ville" => 3,
            "id_ville" => 54

        ]);
        //Tamanrasset
        DB::table('Aeroports')->insert([
            "code_aeroport" => "TMR",
            "nom_aeroport" => "Aéroport de Tamanrasset - Aguenar - Hadj Bey Akhamok",
            // "code_postal_ville" => 3,
            "id_ville" => 55

        ]);
        //Jijel international
        DB::table('Aeroports')->insert([
            "code_aeroport" => "GJL",
            "nom_aeroport" => "Aéroport de Jijel - Ferhat Abbas",
            // "code_postal_ville" => 3,
            "id_ville" => 56

        ]);
        //Annaba
        DB::table('Aeroports')->insert([
            "code_aeroport" => "AAE",
            "nom_aeroport" => "Aéroport d'Annaba - Rabah-Bitat",
            // "code_postal_ville" => 3,
            "id_ville" => 57

        ]);

        //Constantine
        DB::table('Aeroports')->insert([
            "code_aeroport" => "CZL",
            "nom_aeroport" => "Aéroport de Constantine - Mohamed Boudiaf",
            // "code_postal_ville" => 3,
            "id_ville" => 58

        ]);
        //Tlemcen
        DB::table('Aeroports')->insert([
            "code_aeroport" => "TLM",
            "nom_aeroport" => "Aéroport de Tlemcen - Zenata - Messali El Hadj",
            // "code_postal_ville" => 3,
            "id_ville" => 59

        ]);
        //Oran
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ORN",
            "nom_aeroport" => "Aéroport d'Oran - Ahmed Ben Bella",
            // "code_postal_ville" => 3,
            "id_ville" => 60

        ]);
        //	Hassi Messaoud
        DB::table('Aeroports')->insert([
            "code_aeroport" => "HME",
            "nom_aeroport" => "Aéroport d'Hassi Messaoud - Oued Irara - Krim Belkacem",
            // "code_postal_ville" => 3,
            "id_ville" => 61

        ]);
        //El Oued	
        DB::table('Aeroports')->insert([
            "code_aeroport" => "ELU",
            "nom_aeroport" => "Aéroport d'El Oued - Guemar",
            // "code_postal_ville" => 3,
            "id_ville" => 62

        ]);
        //El Bayadh	National
        DB::table('Aeroports')->insert([
            "code_aeroport" => "EBH ",
            "nom_aeroport" => "Aéroport d'El Bayadh",
            // "code_postal_ville" => 3,
            "id_ville" => 63

        ]);
        //Sétif
        DB::table('Aeroports')->insert([
            "code_aeroport" => "QSF",
            "nom_aeroport" => "Aéroport de Sétif - 8 Mai 1945",
            // "code_postal_ville" => 3,
            "id_ville" => 64

        ]);
        //Biskra
        DB::table('Aeroports')->insert([
            "code_aeroport" => "BSK",
            "nom_aeroport" => "Aéroport de Biskra - Mohamed Khider",
            // "code_postal_ville" => 3,
            "id_ville" => 65

        ]);
    }
}
