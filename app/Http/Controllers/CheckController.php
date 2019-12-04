<?php

namespace App\Http\Controllers;

use App\Billet;
use App\Client;
use App\Reservation;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class CheckController extends Controller
{

    public function check()
    {
        return view('enregistrement.check');

    }

    public function store()
    {

        request()->validate([
            'reference_reservation' => 'required|size:6|alpha_num',
            'nom_client' => 'required|max:20|min:3|alpha',
        ]);

//voir si les donnée existe dans la bdd
        $reservation = Reservation::where([
            ['reference_reservation', '=', request('reference_reservation')],

        ])->get()->first();

        $exist_nom = Client::where([
            ['nom_client', '=', request('nom_client')],

        ])->get()->first();

        if ($reservation !== null && $exist_nom !== null) {

//chercher les billets qui ont tous le méme num_reservation
            $billet = Billet::where([
                ['num_reservation', '=', $reservation->num_reservation],

            ])->get();

//chercher les client qui appartient a la méme reservation
$listeDesClients =[];
            foreach ($billet as $num_client) {
                $client = Client::where([
                    ['num_client', '=', $num_client->num_client],

                ])->get();
             array_push($listeDesClients , $client[0]);
                 
         
                
            }
            session()->put('listeDesClients', $listeDesClients);

  return view('enregistrement.information', ['listeClient' => $listeDesClients]);

        } else {
            $error = "veuillez vérifier vos informations !!";
            return view('enregistrement.check', ['error' => $error]);
        }

    }

    public function redirect(){
        $listeClient=session()->get('listeDesClients');
        
         
            //  echo'enregistrer';
             return view('/enregistrement.information',['listeClient'=>$listeClient]);
        
      
       
       
     }
    // public function afficherBagage(){}

}
