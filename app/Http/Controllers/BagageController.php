<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagage;
use App\Client;
use App\Enregistrement;
use App\Reservation_vol;
use App\Vol;

class BagageController extends Controller
{
    public function afficherBagage()
    { $reservation = session()->get('reservation');
        $idvol=Reservation_vol::where('num_reservation','=',$reservation->num_reservation)->get()->first();
      //recupere le prix des vols 
        $vol=Vol::where('id','=',$idvol->id)->get()->first();
        session()->put('vol', $vol);
        
        $client_exist=[];
        $listeEnregistre = [];
        $listeClient = session()->get('listeDesClients');
        foreach ($listeClient as $key) {
            if($key->statut == true){
                $client = Client::where([
                    ['num_client', '=', $key->num_client],

                ])->get();
                array_push($listeEnregistre, $client[0]);
                array_push($client_exist, $key->num_client);
               
            }
            
        }
        session()->put('client_exist', $client_exist);
        

        $bagage1=Bagage::all();
        session()->put('listeEnregistre', $listeEnregistre);
        $bagage_exist=[];
        foreach ($bagage1 as $ligne){
            array_push($bagage_exist, $ligne->num_client);

        }
        session()->put('bagage_exist', $bagage_exist);
       

                   
                       
         

        return view('/enregistrement.bagage', ['listeEnregistre' => $listeEnregistre,'bagage_exist'=>$bagage_exist,'client_exist'=>$client_exist]);

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
 
 $bagage= Bagage::insert(['num_client'=>$num_client,'nb_bagage_main'=>1,'nb_bagage_accessoir'=>1,'nb_bagage_soute' => $nb_bagage_soute,'prix_bagage_soute'=> $prix]);
 $num_bagage = Bagage::where('num_client','=',$num_client)->get()->first();
 $datetime = date("Y-m-d H:i:s");
 
 $enregistrement=Enregistrement::insert(['date_enregistrement'=>$datetime,'num_client'=>$num_client,'num_bagage' => $num_bagage->num_bagage,'id_vol'=>$idvol->id]);


 $bagage1=Bagage::all();
 
 $exist=[];
 foreach ($bagage1 as $ligne){
     array_push($exist, $ligne->num_client);

 }
 session()->put('bagage_exist', $exist);

 $client_exist = session()->get('client_exist');    
 $bagage_exist = session()->get('bagage_exist');
 $listeEnregistre = session()->get('listeEnregistre');
        return view('/enregistrement/bagage', ['listeEnregistre' => $listeEnregistre,'bagage_exist'=>$exist,'client_exist'=>$client_exist]);
        }else{
            $error = "veuillez vérifier vos informations !!";
            return back()->with( ['error' => $error]);
        }
    }

}
