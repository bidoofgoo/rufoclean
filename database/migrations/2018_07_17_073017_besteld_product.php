<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BesteldProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('besteldProduct', function(Blueprint $table){
          $table->increments('id');
          $table->integer('product_id')->unsigned();
          $table->integer('hoeveelheid');
          $table->integer('bestelling_id')->unsigned();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('besteldProduct');
    }
}
