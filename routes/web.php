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
  Route::get('/createProduct', 'productController@create')->name('createproduct');
  Route::get('/createLocatie', 'locatieController@create')->name('createlocatie');
  Route::post('/createProductPost', 'productController@store')->name('createProduct');
  Route::post('/createLocatiePost', 'locatieController@store')->name('createlocatie');
  Route::get('/viewProducten', 'productController@viewAll')->name('viewproducten');
  Route::get('/viewLocaties', 'locatieController@viewAll')->name('viewlocaties');
  Route::get('/viewAll', 'BestellingController@ViewAll')->name('Bestellingen');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bestellingMaken', 'BestellingController@create1');
Route::post('/bestellingMaken2', 'BestellingController@create2');
Route::post('/storeBestelling', 'BestellingController@store');
Auth::routes();
