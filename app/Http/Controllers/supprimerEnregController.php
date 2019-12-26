<?php

namespace App\Http\Controllers;

use App\Bagage;
use App\Billet;
use App\Client;
use App\Enregistrement;
use App\Enregistrement_siege;
use App\reservation;
use App\Reservation_vol;
use Illuminate\Http\Request;

class supprimerEnregController extends Controller
{
    public function PageSupprimer(){
        return view('/enregistrement.supprimerEnreg');
        
    }
    public function Supprimer(){
        request()->validate([
            'reference_reservation' => 'required|alpha_num',
            'nom_client' => 'required|max:20|min:3|alpha',
        ],[
            'reference_reservation.required' =>'Veuillez saisir votre référence de réservation',
            'reference_reservation.alpha_num' =>'Veuillez vérifier votre code ex: NRDDZ9',
            'nom_client.required' =>'Veuillez saisir votre nom ',
            'nom_client.alpha' =>'Vérifier votre nom. ',
            'nom_client.max' =>'Votre nom doit contenir au plus :max caractères. ', 
            'nom_client.min' =>'Votre nom doit contenir au moins :min caractères. ',
        ]);


        //voir si les donnée existe dans la bdd
        $reservation = reservation::where([
            ['reference_reservation', '=', request('reference_reservation')],

        ])->get()->first();
        session()->put('reservation', $reservation);
        $exist_nom = Client::where([
            ['nom_client', '=', request('nom_client')],

        ])->get()->first();

        if ($reservation !== null && $exist_nom !== null) {

//chercher les billets qui ont tous le méme num_reservation
            $billet = Billet::where([
                ['num_reservation', '=', $reservation->num_reservation],

            ])->get();

            session()->put('billet', $billet);
//chercher les client qui appartient a la méme reservation
            $listeDesClients = [];
            $nb=false;
            $idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
            foreach ($billet as $num_client) {
                $enregistrement=Enregistrement::where([
                    'num_client'=> $num_client->num_client,
                    'id_vol'=>$idvol->id_vol,
                    'statut'=>1,
                ])->get()->first();
                if($enregistrement != null){
                    
                $delete_Enreg_Siege=Enregistrement_siege::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
                
                
             
                $delete_bagage=Bagage::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
                
                $delete_Enreg=Enregistrement::where('num_enregistrement',$enregistrement->num_enregistrement)->delete();
                      
                if($delete_Enreg_Siege || $delete_bagage || $delete_Enreg){
                    $nb=true;
                   }
                }
                
                
                
            }
            if($nb == true){
                $error = "Votre enregistrement a bien été supprimer .";
                return view('enregistrement.check', ['error' => $error]);
            }else{
                $error = "Enregistrement n'existe pas !!";
                return view('enregistrement.check', ['error' => $error]);
            }
            

        }else{
            $error = "Enregistrement n'existe pas !!";
            return view('enregistrement.check', ['error' => $error]); 
        }
        
    }
}
