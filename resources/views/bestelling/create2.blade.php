@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-7">
         <div class="card align-middle">
            <div class="card-header" id="card-header-main"><h2>Voeg producten toe aan bestelling.</h2></div>
            <div class="card-body">

               {{Form::open(array('action'=>'BestellingController@store','method'=>'post','class'=>'create-form'))}}
               <input style="display:none" type="text" name="locatie" value="{{ $locatie }}">
               @foreach($producten as $product)
               <fieldset class="create-field">
                  <label for="locatie">{{ $product->name}}</label>
                  <input type="number" name="{{$product->id}}" value="0">
               </fieldset>
               @endforeach
               <fieldset class="create-field">
                  <span></span>
                  <input class="btn btn-default" type="submit" value="Invoeren">
               </fieldset>
               {{Form::close()}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
