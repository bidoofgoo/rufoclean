<?php

use App\Http\Controllers\HomeController;

Route::get('/', function () {
  if (Auth::user()->is_admin == true){
    return HomeController::admin();
  }
  else {
    return HomeController::gebruiker();
  }
})->middleware('auth');

Route::group([ 'middleware' => 'admin'], function(){
  Route::get('/admin', 'HomeController@admin')->name('adminview');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
