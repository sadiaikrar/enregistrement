<?php

namespace App\Http\Controllers;

use App\Avion;
use App\Bagage;
use App\Categorie;
use App\Reservation_vol;
use App\Siege;

class SiègeController extends Controller
{
    public function afficherSiège()
    {
       

        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        //recuperer le num de la classe
        $num_classe=$reservation->num_classe;
        
        $id_avion=$vol->id_avion;
        
$avion=Avion::where('id','=',$id_avion)->get()->first();
$capaciteAvion=$avion->capacite_avion;

$placeRestante=$vol->nombre_place_restante;
$siegeOccupe=Siege::where(['etat_siege'=>1,'id_avion'=>$id_avion,'num_classe'=>$num_classe])->get();
$siegelibre=Siege::where(['etat_siege'=>0,'id_avion'=>$id_avion,'num_classe'=>$num_classe])->get();
//  dd($siegeOccupe);

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

if($num_classe == 2){
    $capaciteAvion=$capaciteAvion/9;
    return view('/enregistrement.siège', ['listeClient' => $listeEnregistre,'capaciteAvion'=>$capaciteAvion,'placeRestante'=>$placeRestante,'siegeOccupe'=>$siegeOccupe,'siegelibre'=>$siegelibre]);
}
if($num_classe == 3){
    $capaciteAvion=($capaciteAvion*2)/9;
    return view('/enregistrement.siège', ['listeClient' => $listeEnregistre,'capaciteAvion'=>$capaciteAvion,'placeRestante'=>$placeRestante,'siegeOccupe'=>$siegeOccupe,'siegelibre'=>$siegelibre]);
}
if($num_classe == 1){
    $capaciteAvion=($capaciteAvion*2)/3;

    return view('/enregistrement.siège', ['listeClient' => $listeEnregistre,'capaciteAvion'=>$capaciteAvion,'placeRestante'=>$placeRestante,'siegeOccupe'=>$siegeOccupe,'siegelibre'=>$siegelibre]);

}

        
        
    }

}
