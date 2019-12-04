<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiègeController extends Controller
{
    public function afficherSiège(){

        $listeClient=session()->get('listeDesClients');
                  return view('/enregistrement.siège',['siègeClient'=>$listeClient]);
            }
       
}
