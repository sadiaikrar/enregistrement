<?php

namespace App\Http\Controllers;

use App\Client;
use App\Enregistrement;
use App\Enregistrement_siege;
use App\Siege;
use Illuminate\Http\Request;

class MacarteController extends Controller
{
    //
     public function Imprimer(int $num_client, string $nom_client, string $prenom_client)
    {
        
        $requete = Client::where('num_client', $num_client)->get('date_naissance_client')->first();
    $dateNaissance = $requete->date_naissance_client;
    $billet = session()->get('billet');
    $siegeClient = session()->get('siegeClient');
    $vol =session()->get('vol');
    $idVol=session()->get('idVol');
    $numbillet=null;
    
    foreach($billet as $key){
        if($key->num_client == $num_client){
         $numbillet=$key->num_billet;
        }
    }
  
      $enregistrement=Enregistrement::where([
                'num_client'=>$num_client,
                'id_vol'=>$idVol->id_vol,
                'statut'=>1,
               
            ])->get()->first();
    // récupérer les siège 
    $enregistrement_Siege=Enregistrement_siege::where('num_enregistrement',$enregistrement->num_enregistrement)->get()->first();
     $siege=Siege::where('id',$enregistrement_Siege->num_siege)->get()->first();
  

    $reservation = session()->get('reservation');
    $vol =session()->get('vol');
        return view('/enregistrement.cartePDF', ['num_client' => $num_client, 'nom_client' => $nom_client, 'prenom_client' => $prenom_client,'dateNaissance'=>$dateNaissance,'num_billet'=>$numbillet,'reservation'=>$reservation,'vol'=>$vol,'siege'=>$siege->num_siege]);
   
   
    }
}
