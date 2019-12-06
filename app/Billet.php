<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    protected $fillable=['num_billet'];

    public function client()
    {
    return $this->belongsTo('App\Client');

    
    }

}
