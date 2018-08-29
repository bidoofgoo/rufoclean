<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class productController extends Controller
{
    //
    public function create(){
      return view(/'createProduct');
    }

    public function store(Request $request){
      $newProduct = new product;
      $newProduct->name = $request->name;

      if ($newProduct->save()){
        return redirect('/adminview');
      }
    }

}
