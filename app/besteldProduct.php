<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class besteldProduct extends Model
{
    //
    protected $table = 'besteldProduct';

    public function producten(){
      return $this->hasOne('App\product', 'id', 'product_id');
    }

    public function bestellingen(){
      return $this->hasOne('App\bestellingen', 'id', 'bestelling_id');
    }

    public $timestamps = false;
}
