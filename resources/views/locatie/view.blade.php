@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-7">
         <div class="card align-middle">
            <div class="card-header" id="card-header-main"><h2>Alle locaties</h2></div>
            <div class="card-body">
               @foreach($locaties as $locatie)
                  <div class="">
                     <p>{{$locatie->name}}</p>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
