<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bestellingen extends Model
{
    //
    protected $table = 'bestellingen';

    public function besteldeProducten(){
      return $this.hasMany('App\besteldProduct', 'bestelling_id', 'id');
    }

    public function eigenaar(){
      return $this.hasOne('App\User', 'user_id', 'id');
    }

    public function locaties(){
      return $this.hasOne('App\locatie', 'id', 'locatie_id');
    }
}
