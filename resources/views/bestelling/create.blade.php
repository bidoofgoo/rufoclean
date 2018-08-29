@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-7">
         <div class="card align-middle">
            <div class="card-header" id="card-header-main"><h2>Voeg je eigen locatie toe!</h2></div>
            <div class="card-body">

               {{Form::open(array('action'=>'BestellingController@create2','method'=>'post','class'=>'create-form'))}}
               <fieldset class="create-field">
                  <label for="locatie">Bestellen voor locatie</label>
                  <select class="" required name="locatie">
                     @foreach($locaties as $locatie)
                        <option value="{{$locatie->id}}">{{$locatie->name}}</option>
                     @endforeach
                  </select>
               </fieldset>
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
