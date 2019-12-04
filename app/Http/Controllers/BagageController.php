<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagage;
use App\Enregistrement;


class BagageController extends Controller
{
    public function afficherBagage()
    {

        $listeClient = session()->get('listeDesClients');
        return view('/enregistrement.bagage', ['bagageClient' => $listeClient]);
    }

    public function storeBagage()
    {

        $nb_bagage_soute = request('nb_bagage_soute');
$prix = $nb_bagage_soute*50;
        $num_client = request('num_client');

 
        

//insert into table bagage nbr de bagage
        //insert into table enregistrement num table bagage et num client
 
 $bagage= Bagage::where('num_client', $num_client)->insert(['num_client'=>$num_client,'nb_bagage_soute' => $nb_bagage_soute,'prix_bagage_soute'=> $prix]);
 $num_bagage = Bagage::where('num_client', $num_client)->get()->first();
 
 $enregistrement=Enregistrement::where('num_client', $num_client)->insert(['num_client'=>$num_client,'num_bagage' => $num_bagage->num_bagage]);
 
     
 
 $listeClient = session()->get('listeDesClients');
        return view('/enregistrement/bagage', ['bagageClient' => $listeClient]);

    }

}
