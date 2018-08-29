<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class besteldProduct extends Model
{
    //
    protected $table = 'besteldProduct';

    public function producten(){
      return $this.hasOne('App\product', 'product_id', 'id');
    }

    public function bestellingen(){
      return $this.hasOne('App\bestellingen', 'bestelling_id', 'id');
    }
}
