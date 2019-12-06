<?php

namespace App\Http\Controllers;

use App\Avion;
use App\Categorie;
use App\Reservation_vol;
use App\Siege;

class SiègeController extends Controller
{
    public function afficherSiège()
    {
       

        $listeClient = session()->get('listeDesClients');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        //recuperer le num de la classe
        $num_classe=$reservation->num_classe;
        $num_avion=$vol->num_avion;
$avion=Avion::where('num_avion','=',$num_avion)->get()->first();
$capaciteAvion=$avion->capacite_avion;
$placeRestante=$vol->nombre_place_restante;

//si un bébé ne prend pas de siège 
// $siègeClient=[];
// foreach($listeClient as $key){
//     $num_categorie=$key->num_categorie;
//     $categorie=Categorie::where('num_categorie','=',$num_categorie)->get()->first();
// if($categorie->nom_categorie !='bebe'){
//     array_push($siègeClient, $key);
// }
// }
// session()->put('siègeClient', $siègeClient);






        // $avion=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
        // dd($avion);

        
        return view('/enregistrement.siège', ['siègeClient' => $listeClient,'capaciteAvion'=>$capaciteAvion,'placeRestante'=>$placeRestante]);
    }

}
// function etatSiege( $num_siège, $num_avion, $num_classe){
//     $siège=Siege::where([
//         'num_siège'=>$num_siège,
//         'num_avion'=>$num_avion,
//         'num_classe'=>$num_classe,
//     ])->get()->first();
//     $etat_siège=$siège->etat_siege;
//     return $etat_siège;
//     }