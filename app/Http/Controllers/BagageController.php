<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagage;
use App\Enregistrement;
use App\Reservation_vol;
use App\Vol;

class BagageController extends Controller
{
    public function afficherBagage()
    {

        $listeClient = session()->get('listeDesClients');
        return view('/enregistrement.bagage', ['bagageClient' => $listeClient]);
    }

    public function storeBagage()
    { //recuper le vol
        $reservation = session()->get('reservation');
        $idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
      //recupere le prix des vols 
        $vol=Vol::where('id','=',$idvol->id)->get()->first();
        session()->put('vol', $vol);
      

        $nb_bagage_soute = request('nb_bagage_soute');
        if($nb_bagage_soute<=9 && $nb_bagage_soute>=0){
$prix = $nb_bagage_soute*$vol->prix_bagage_sup;

        $num_client = request('num_client');

 
        

//insert into table bagage nbr de bagage
        //insert into table enregistrement num table bagage et num client
 
 $bagage= Bagage::insert(['nb_bagage_main'=>1,'nb_bagage_accessoir'=>1,'nb_bagage_soute' => $nb_bagage_soute,'prix_bagage_soute'=> $prix]);
 $num_bagage = Bagage::get('num_bagage')->first();
 $datetime = date("Y-m-d H:i:s");
 
 $enregistrement=Enregistrement::insert(['date_enregistrement'=>$datetime,'num_client'=>$num_client,'num_bagage' => $num_bagage->num_bagage,'id_vol'=>$idvol->id]);

     
 
 $listeClient = session()->get('listeDesClients');
        return view('/enregistrement/bagage', ['bagageClient' => $listeClient]);
        }else{
            $error = "veuillez vérifier vos informations !!";
            return back()->with( ['error' => $error]);
        }
    }

}
