<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
   
  public static function trouverVols($date)
  {
    return self::where('date_depart', $date)->first();
  }

  public function prixPlus()
  {
      return $this->prix_vol+1000000;
  }

  public static function plusOuMoins($date, $plus, $moins)
  {
    $maDate = new Carbon($date);
    $dateMoins = $maDate->subDays($moins)->translatedFormat('Y-m-d');
    $datePlus = $maDate->addDays($plus)->translatedFormat('Y-m-d');
    return self::where('date_depart', '>', $dateMoins)->orWhere('date_depart', '<', $datePlus)->get();
  }


//relation avec ville avec num_ville_depart

  public function ville()
  {
      return  $this->belongsTo('App\Ville','num_ville_depart');
     
  } 
  //relation avec ville avec num_ville_arriver
      
  public function ville1()
  {
      return  $this->belongsTo('App\Ville','num_ville_arriver');
     
  } 
  
  

  /**
   * Permet de récuperer les reservation d'un vol
   *
   * @return void
   */
  public function reservations()
    {
       return $this->belongsToMany('App\Reservation','reservation_vols','num_reservation','id_vol');


    }

   //relation avec enregistremnt 1-n
    public function enregistrements()
    {
       return $this->hasMany('App\Enregistrement','id_vol','id');


    }
    //relation avec avion 
    public function avion()
    {
        return  $this->belongsTo('App\Avion','id_avion','id');
    }
    //relation avec aeroport avec escale 
    public function aeroports1()
    {
       return $this->belongsToMany('App\Aeroport','escales','id_vol','code_aeroport_depart');
  
    }

    public function aeroports2()
    {
       return $this->belongsToMany('App\Aeroport','escales','id_vol','code_aeroport_arriver');
  
    }
// relation avec terminal

public function terminal1()
    {
       return $this->belongsTo('App\Terminal','num_terminal_depart');
  
    }
    public function terminal2()
    {
       return $this->belongsTo('App\Terminal','num_terminal_arriver');
  
    }


//relation avec personnel

public function personnels()
{
   return $this->belongsToMany('App\Personnel','personnel_vols','id_vol','id_personnel');


}
//relation avec aeroport
public function aeroport()
{
    return  $this->belongsTo('App\Aeroport','code_aeroport_depart');


}
public function aeroport1()
{
    return  $this->belongsTo('App\Aeroport','code_aeroport_arriver');


}
//
public static function recuperer_vol1($idvol)
{ 

$vol=Vol::where('id','=',$idvol->id)->get()->first();

return $vol;

}
public static  function retournerVol($num_vol)
{
 $enrg=Vol::where('id','=',$num_vol)->enregistrements()->get();
return $enrg;

}

public static function modifier_prix_classe($num_classe,$id_vol)
{ 
  
   $prix=Vol::find($id_vol);
   $pr=$prix->prix_vol;
   return $pr;

}




}