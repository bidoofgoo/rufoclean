@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h3>Alle bestellingen</h3>

                </div>

                <div class="">
                   @foreach($bestellingen as $bestelling)
                   @if($bestelling->besteldeProducten->count() > 0)
                     <div class="">
                        <table>
                           <tr>
                              <th>Bestelling door: </th>
                              <td>{{$bestelling->eigenaar->name}}</td>
                           </tr>
                           <tr>
                              <th>Locatie: </th>
                              <td>{{$bestelling->locaties->name}}</td>
                           </tr>
                           <tr>
                              <th>Bestelling geplaatst op: </th>
                              <td>{{$bestelling->created_at}}</td>
                           </tr>
                           <tr>
                              <th>Product</th>
                              <th>Aantal besteld</th>
                           </tr>
                        @foreach($bestelling->besteldeProducten as $product)
                           <tr>
                              <td>{{$product->producten->name}}</td>
                              <td>{{$product->hoeveelheid}}</td>
                           </tr>
                        @endforeach
                        <tr>
                           <td>&nbsp;</td>
                        </tr>
                        </table>
                     </div>
                   @endif
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
