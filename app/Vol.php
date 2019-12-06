<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
   
  public static function trouverVols($date){
    return self::where('date_depart', $date)->first();
  }

  public function prixPlus(){
      return $this->prix_vol+1000000;
  }

  public static function plusOuMoins($date, $plus, $moins){
    $maDate = new Carbon($date);
    $dateMoins = $maDate->subDays($moins)->translatedFormat('Y-m-d');
    $datePlus = $maDate->addDays($plus)->translatedFormat('Y-m-d');
    return self::where('date_depart', '>', $dateMoins)->orWhere('date_depart', '<', $datePlus)->get();
  }

}
