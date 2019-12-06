<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
// public function billet()
// {
    
// return $this->hasOne('App\Billet');
// $billet = client::find(1)->billet;
public function select()
{
//   $client=new Client();

$req='SELECT * FROM Client WHERE num_client ==1';
echo $req; 



}





}