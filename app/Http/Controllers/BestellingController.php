<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bestellingen;
use App\besteldProduct;
use App\product;
use App\locatie;
use Auth;

class BestellingController extends Controller
{

   public function create1(){
      return view('bestelling.create', ['locaties' => locatie::all()]);
   }

   public function create2(Request $request){
      return view('bestelling.create2', ['locatie' => $request->locatie,
      'producten' => product::all()]);
   }

   public function store(Request $request){
      $bestelling = new bestellingen;
      $user = Auth::user();

      $bestelling->user_id = $user->id;
      $bestelling->locatie_id = $request->locatie;

      $bestelling->save();

      foreach ($request->except('_token') as $key => $value) {
         if ($key != 'locatie') {
            if($value != '0'){
               $link = new besteldProduct;
               $link->product_id = $key;
               $link->hoeveelheid = $value;
               $link->bestelling_id = $bestelling->id;
               $link->save();
            }
         }
      }
      return redirect('/');
   }

   public function ViewAllOwner(){}

   public function ViewAll(){
      $bestellingen = bestellingen::orderBy('created_at', 'desc')->get();

      return view('bestelling.viewAll', ['bestellingen' => $bestellingen]);
   }
}
