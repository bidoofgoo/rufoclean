<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';

    public function besteldeProducten(){
      return $this.hasMany('App\besteldProduct', 'product_id', 'id');
    }

    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}
