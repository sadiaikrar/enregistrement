<?php

namespace App\Http\Controllers;

use App\Bagage;
use App\Enregistrement;
use App\Enregistrement_siege;
use Illuminate\Http\Request;
class PaiementController extends Controller
{
    
    public function carte(){
        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        $idVol=session()->get('idVol');
        $mesSiege =session()->get('mesSiege');
       
        //si il a payer
        for($i=0;$i<count($listeEnregistre);$i++){
           
            $enregistrement=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol->id_vol,
                
            ])->update(['statut'=>1]);
            $enreg=Enregistrement::where([
                'num_client'=>$listeEnregistre[$i]->num_client,
                'id_vol'=>$idVol->id_vol,
                'statut'=>1,
                
            ])->get()->first();
             
          Enregistrement_siege::insert(['num_enregistrement'=>$enreg->num_enregistrement,'num_siege'=>$mesSiege[$i]]);
              
        }
        
       
        return view('enregistrement.carte_embarquement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol]); 
    }

}
