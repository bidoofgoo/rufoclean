<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\locatie;
use View;

class locatieController extends Controller
{
   public function create(){
      return view('locatie.create');
   }

   public function store(Request $request){
      $newLocatie = new locatie;
      $newLocatie->name = $request->name;
      $newLocatie->save();

      return redirect('/')->with('succes',['Met succes toegevoegd!']);
   }

   public function viewAll(){
      $locaties = locatie::all();

      return view('locatie.view', ['locaties' => $locaties]);
   }
}
