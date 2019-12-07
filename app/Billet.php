<?php

namespace App;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Billet extends Model
{
    protected $fillable=['num_billet'];

    public function client()
    {
    return $this->belongsTo('App\Client');

    
    }

//chercher les billets qui ont tous le méme num_reservation

public static function afficherBillet($num_res)
{
  $reservation=new Reservation();
  $num_res=$reservation->num_reservation;
    // $num_res=$reservation->num_reservation; 
  Billet::where([
    ['num_reservation', '=',$reservation->num_reservation],

])->get();

}





}
