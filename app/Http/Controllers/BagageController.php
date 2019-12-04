<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagageController extends Controller
{
    public function afficherBagage(){

$listeClient=session()->get('listeDesClients');
          return view('/enregistrement.bagage',['bagageClient'=>$listeClient]);
    }
   
    public function storeBagage(){
      
$nb_bagage_soute = request('nb_bagage_soute');
$prix = request('prix');
$num_client = request('num_client');
 // dd($num_client);

//insert into table bagage nbr de bagage
//insert into table enregistrement num table bagage et num client
$listeClient=session()->get('listeDesClients');
         return view('/enregistrement/bagage',['bagageClient'=>$listeClient]);

    }
    
}
