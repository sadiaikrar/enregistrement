<?php

namespace App\Http\Controllers;

use App\Billet;
use App\Client;
use App\Enregistrement;
use App\Reservation;
use App\Reservation_vol;
use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function check()
    {
        return view('enregistrement.check');

    }

    public function store()
    {

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
        $reservation = Reservation::where([
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
$idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
session()->put('idVol', $idvol);         
            $listeDesClients = [];
            $nb=false;
            $datetime = date("Y-m-d H:i:s");
           
            foreach ($billet as $num_client) {
                $client = Client::where([
                    ['num_client', '=', $num_client->num_client],

                ])->get();
                array_push($listeDesClients, $client[0]);

                $enregistrement=Enregistrement::where([
                    'num_client'=>$num_client->num_client,
                    'id_vol'=>$idvol->id_vol,
                    'statut'=>1,
                ])->get()->first();
                if($enregistrement != null){
                    $error = "vous étes déja enregistrer !";
                   return view('enregistrement.check', ['error' => $error]);
                }else{
                   
                 
                        $enregistrement=Enregistrement::insert(['date_enregistrement'=>$datetime,'num_client'=>$num_client->num_client,'id_vol'=>$idvol->id_vol]);
                      
                    }
              
            }
 
            session()->put('listeDesClients', $listeDesClients);
            

            return view('enregistrement.information', ['listeClient' => $listeDesClients]);

        } else {
            $error = "veuillez vérifier vos informations !!";
            return view('enregistrement.check', ['error' => $error]);
        }

    }



    
    public function retour()
    {
        $listeClient = session()->get('listeDesClients');

        return view('/enregistrement.information', ['listeClient' => $listeClient]);

    }

}
