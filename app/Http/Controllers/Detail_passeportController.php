<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class Detail_passeportController extends Controller
{


    public function afficherClient(int $num_client, string $nom_client, string $prenom_client){
        $requete=Client::where('num_client', $num_client)->get('date_naissance_client')->first();
        $dateNaissance=$requete->date_naissance_client;
        return view('/enregistrement.detail_passeport', ['num_client' => $num_client,'nom_client' => $nom_client,'prenom_client' => $prenom_client,'dateNaissance'=>$dateNaissance]);
    }

    public function insertToClient(int $num_client, string $nom_client, string $prenom_client){
        request()->validate([
            'nationalite' => 'required|alpha',
            'numero_passeport' => 'required|numeric',
            'confirmer_numero_passeport'=> 'required|numeric|same:numero_passeport',
            'date_expiration_passeport'=> 'required|date|after_or_equal:today',
        ]);
        
 //ajouter les informations du client       
 $insert=Client::where('num_client', $num_client)->update(['nationalite_client' => request('nationalite'),'num_passeport_client'=> request('numero_passeport'),'date_expiration_passeport'=> request('date_expiration_passeport'),'statut'=>true]);

 
if($insert){
   
    
    
     return redirect()->action('CheckController@redirect');
  
}else{
    $error = "veuillez vérifier vos informations !!";
    return back()->with('error',$error);
}

    




    }
    
}
