<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('Villes')->insert([
        //     "nom_ville" => "Alger",
        //     "pays_ville" => " Algérie",

        // ]);


        // DB::table('Villes')->insert([
        //     "nom_ville" => "Paris",
        //     "pays_ville" => "France",

        // ]);

        // DB::table('Villes')->insert([
        //     "nom_ville" => "New York",
        //     "pays_ville" => " Algérie",

        // ]);

        // DB::table('Villes')->insert([
        //     "nom_ville" => "Oslo",
        //     "pays_ville" => "Norvège",

        // ]);
        //remplissage de la table ville 
        //Europe:
        //France 
        //Paris 

        DB::table('Villes')->insert([

            "nom_ville" => "Paris",
            "pays_ville" => "France",

        ]);
        //Lyon

        DB::table('Villes')->insert([
            // "code_postale_ville"=>69000,
            "nom_ville" => "Lyon",
            "pays_ville" => "France",

        ]);
        //Marseille

        DB::table('Villes')->insert([
            // "code_postale_ville"=>13000,
            "nom_ville" => "Marseille",
            "pays_ville" => "France",

        ]);
        //Toulouse

        DB::table('Villes')->insert([
            //"code_postale_ville"=>31000,
            "nom_ville" => "Toulouse",
            "pays_ville" => "France",

        ]);
        // Nice

        DB::table('Villes')->insert([
            //"code_postale_ville"=>06000,
            "nom_ville" => "Nice",
            "pays_ville" => "France",

        ]);
        // bordeaux

        DB::table('Villes')->insert([
            //"code_postale_ville"=>33000,
            "nom_ville" => "Bordeaux",
            "pays_ville" => "France",

        ]);

        // //Allemagne
        //Francfort

        DB::table('Villes')->insert([
            //"code_postale_ville"=>60311,
            "nom_ville" => "Francfort",
            "pays_ville" => "Allemagne",

        ]);

        //Berlin

        DB::table('Villes')->insert([
            // "code_postale_ville"=>10178,
            "nom_ville" => "Berlin",
            "pays_ville" => "Allemagne",

        ]);


        //-------------------------           
        //ITALI:**************
        //ROME:
        DB::table('Villes')->insert([
            //"code_postale_ville"=>00100,
            "nom_ville" => "Rome",
            "pays_ville" => "Itali",

        ]);
        //Milan:
        DB::table('Villes')->insert([
            //"code_postale_ville"=>20100,
            "nom_ville" => "Milan",
            "pays_ville" => "Itali",

        ]);
        //Venise:
        DB::table('Villes')->insert([
            //"code_postale_ville"=>25870,
            "nom_ville" => "Venise",
            "pays_ville" => "Itali",

        ]);
        //------------------
        //Espagne
        //Madrid:

        DB::table('Villes')->insert([
            //   "code_postale_ville"=>28079,
            "nom_ville" => "Madrid",
            "pays_ville" => "Espagne",

        ]);
        //Barcelon:
        DB::table('Villes')->insert([
            //   "code_postale_ville"=>28079,
            "nom_ville" => "Barcelon",
            "pays_ville" => "Espagne",

        ]);

        //------------
        //Russie
        //Moscou:

        DB::table('Villes')->insert([
            // "code_postale_ville"=>125032,
            "nom_ville" => "Moscou",
            "pays_ville" => "Russie",

        ]);

        //------------
        //Royaume-Uni
        //	Londres
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Londres",
            "pays_ville" => "Royaume-Uni",

        ]);
        //Manchester 
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Manchester",
            "pays_ville" => "Royaume-Uni",

        ]);
        //------------------
        //SUISSE
        //Genève

        DB::table('Villes')->insert([
            //  "code_postale_ville"=>,
            "nom_ville" => "Genève",
            "pays_ville" => "Suisse",

        ]);

        //------
        //grèce
        //Athènes
        DB::table('Villes')->insert([
            //  "code_postale_ville"=>,
            "nom_ville" => "Athènes",
            "pays_ville" => "grèce",

        ]);



        //------------
        //Turquie
        //	Istanbul

        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Istanbul",
            "pays_ville" => "Turquie",

        ]);
        //----------
        // Portugal
        //Lisbonne
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Lisbonne",
            "pays_ville" => "Portugal",

        ]);
        //--------
        //Pays-Bas
        //	Amsterdam
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Amsterdam",
            "pays_ville" => "Pays-Bas",

        ]);
        //------------
        // Belgique  Bruxelles,

        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Bruxelles",
            "pays_ville" => "Belgique",

        ]);
        //--
        //Autriche Vienne
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Vienne",
            "pays_ville" => "Autriche",

        ]);
        //-------
        // Hongrie Budapest
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => " Budapest",
            "pays_ville" => "Hongrie",

        ]);
        //--------
        //Denmark 	Copenhague
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "	Copenhague",
            "pays_ville" => "Denmark ",

        ]);
        //--------------------
        //Amerique
        //Canada Montréal
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Montréal",
            "pays_ville" => "Canada",

        ]);
        //États-Unis New York

        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "New York",
            "pays_ville" => "États-Unis",

        ]);

        //États-Unis San Francisco (Californie)
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "San Francisco",
            "pays_ville" => "États-Unis",

        ]);
        //---------------
        //Asiiiiiiiiiiiiiiiieeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
        // Jordanie Amman
        DB::table('Villes')->insert([
            //      "code_postale_ville"=>,
            "nom_ville" => " Amman",
            "pays_ville" => "Jordanie",

        ]);

        //  Chine Pékin
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Pékin",
            "pays_ville" => "Chine",

        ]);
        //  QATAR Doha
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Doha",
            "pays_ville" => "Qatar",

        ]);
        // Émirats arabes unis Abou Dabi
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Abou Dabi",
            "pays_ville" => "Émirats arabes",

        ]);
        // Liban Beyrouth
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Beyrouth",
            "pays_ville" => "Liban",

        ]);

        // Japon Tokyo
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Tokyo",
            "pays_ville" => "Japon",

        ]);
        // Inde Delhi
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Delhi",
            "pays_ville" => "Inde",

        ]);
        // Singapour Singapour
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Singapour",
            "pays_ville" => "Singapour",

        ]);

        //Malaisie Kuala Lumpur

        DB::table('Villes')->insert([
            //      "code_postale_ville"=>,
            "nom_ville" => "Kuala Lumpur",
            "pays_ville" => "Malaisie",

        ]);

        //Thaïlande  Bangkok 
        DB::table('Villes')->insert([
            //    "code_postale_ville"=>,
            "nom_ville" => "Bangkok ",
            "pays_ville" => "Thaïlande",

        ]);
        //Corée du Sud Grand Séoul
        DB::table('Villes')->insert([
            //  "code_postale_ville"=>,
            "nom_ville" => "Séoul",
            "pays_ville" => "Corée du Sud",

        ]);
        //Viêt Nam Hanoï
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Hanoï",
            "pays_ville" => "Vietnam",

        ]);
        //---------------------
        //Afriqueeeeeeeeeeeeeeeeeeeeeee
        //Tunisie Tunis
        DB::table('Villes')->insert([
            //      "code_postale_ville"=>,
            "nom_ville" => "Tunisie",
            "pays_ville" => "Tunisie",

        ]);
        //Maroc Casablanca
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Casablanca",
            "pays_ville" => "Maroc",

        ]);
        // Mali Bamako
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Bamako",
            "pays_ville" => "Mali",

        ]);
        //Afrique de sud Johannesbourg
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Johannesbourg",
            "pays_ville" => "Afrique de sud",

        ]);
        // Sénégal Diass 
        DB::table('Villes')->insert([
            //  "code_postale_ville"=>,
            "nom_ville" => "Diass",
            "pays_ville" => "Sénégal",

        ]);
        //   Burkina Faso Ouagadougou
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Ouagadougou",
            "pays_ville" => "Burkina Faso",

        ]);
        // Kenya Nairobi 
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Nairobi ",
            "pays_ville" => "Kenya",

        ]);
        // Côte d'Ivoire	Abidjan
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Abidjan",
            "pays_ville" => "Côte d'Ivoire",

        ]);
        // Mauritanie Nouakchott
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Nouakchott",
            "pays_ville" => "Mauritanie",

        ]);
        // Soudan	Khartoum
        DB::table('Villes')->insert([
            //"code_postale_ville"=>,
            "nom_ville" => "Khartoum",
            "pays_ville" => "Soudan",

        ]);
        //Nationallll 
        //  Algérie 
        //Alger 
        DB::table('Villes')->insert([
            //      "code_postale_ville"=>,
            "nom_ville" => "Alger",
            "pays_ville" => " Algérie",

        ]);
        //Béjaïa
        DB::table('Villes')->insert([

            "nom_ville" => "Béjaïa",
            "pays_ville" => " Algérie",

        ]);

        //Djanet
        DB::table('Villes')->insert([

            "nom_ville" => "Djanet",
            "pays_ville" => " Algérie",

        ]);

        //Illizi
        DB::table('Villes')->insert([

            "nom_ville" => "Illizi",
            "pays_ville" => " Algérie",

        ]);
        //Tamanrasset
        DB::table('Villes')->insert([

            "nom_ville" => "Tamanrasset",
            "pays_ville" => " Algérie",

        ]);

        //Jijel
        DB::table('Villes')->insert([

            "nom_ville" => "Jijel",
            "pays_ville" => " Algérie",

        ]);
        //Annaba
        DB::table('Villes')->insert([

            "nom_ville" => "Annaba",
            "pays_ville" => " Algérie",

        ]);
        //Constantine
        DB::table('Villes')->insert([

            "nom_ville" => "Constantine",
            "pays_ville" => " Algérie",

        ]);
        //Tlemcen
        DB::table('Villes')->insert([

            "nom_ville" => "Tlemcen",
            "pays_ville" => " Algérie",

        ]);
        //Oran
        DB::table('Villes')->insert([

            "nom_ville" => "Oran",
            "pays_ville" => " Algérie",

        ]);
        //Hassi Messaoud
        DB::table('Villes')->insert([

            "nom_ville" => "Hassi Messaoud",
            "pays_ville" => " Algérie",

        ]);
        //El Oued	
        DB::table('Villes')->insert([

            "nom_ville" => "El Oued",
            "pays_ville" => " Algérie",

        ]);
        //El Bayadh	
        DB::table('Villes')->insert([

            "nom_ville" => "El Bayadh",
            "pays_ville" => " Algérie",

        ]);
        //Sétif
        DB::table('Villes')->insert([

            "nom_ville" => "Sétif",
            "pays_ville" => " Algérie",

        ]);
        //Biskra
        DB::table('Villes')->insert([

            "nom_ville" => "Biskra",
            "pays_ville" => " Algérie",

        ]);
    }
}
