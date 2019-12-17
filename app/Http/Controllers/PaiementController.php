<?php

namespace App\Http\Controllers;

use App\Bagage;
use Illuminate\Http\Request;
class PaiementController extends Controller
{
    public function payer(){
        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        $somme=0;
        $listeBagage=[];
        foreach($listeEnregistre as $key){
            $bagage=Bagage::where('num_client','=',$key->num_client)->get();
            $prixBagage=Bagage::where('num_client','=',$key->num_client)->get()->first();
             $prix=$prixBagage->prix_bagage_soute;
             
             $somme=$somme+$prix;
             array_push($listeBagage, $bagage[0]);
            }
             
            session()->put('listeBagage', $listeBagage); 
            
        if($somme == 0){    
            return view('enregistrement.carte_embarquement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol,'listeBagage'=>$listeBagage]);
        }
        return view('enregistrement.paiement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol,'somme'=>$somme,'listeBagage'=>$listeBagage]);

    }
    public function carte(){
        $listeEnregistre = session()->get('listeEnregistre');
        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        $vol =session()->get('vol');
        return view('enregistrement.carte_embarquement',['listeEnregistre'=>$listeEnregistre,'billet'=>$billet,'reservation'=>$reservation,'vol'=>$vol]); 
    }

}
