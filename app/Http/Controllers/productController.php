<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class productController extends Controller
{
   public function create(){
      return view('product.create');
   }

   public function store(Request $request){
      $newProduct = new product;
      $newProduct->name = $request->name;

      if ($newProduct->save()){
         return redirect('/')->with('succes',['Met succes toegevoegd!']);
      }
   }

   public function viewAll(){
      $producten = product::all();

      return view('product.view', ['producten' => $producten]);
   }
}
