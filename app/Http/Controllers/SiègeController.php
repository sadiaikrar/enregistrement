<?php

namespace App\Http\Controllers;


use App\Reservation_vol;

class SiègeController extends Controller
{
    public function afficherSiège()
    {

        $billet = session()->get('billet');
        $reservation = session()->get('reservation');
        //recuperer le num de la classe
        // dd($reservation->num_classe);

        // $avion=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
        // dd($avion);

        $listeClient = session()->get('listeDesClients');
        return view('/enregistrement.siège', ['siègeClient' => $listeClient]);
    }

}
