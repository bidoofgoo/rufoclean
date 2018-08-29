@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h3>Selectie scherm</h3>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                      <button onclick="location.href= 'viewAll'" class="btn btn-dark">Bestellingen bekijken</button>
                    </div>

                    <div class="row">
                      <button onclick="location.href= 'viewProducten'" class="btn btn-dark">producten Bekijken</button>
                    </div>

                    <div class="row">
                      <button onclick="location.href= 'createProduct'" class="btn btn-dark">product toevoegen</button>
                    </div>

                    <div class="row">
                      <button onclick="location.href= 'viewLocaties'" class="btn btn-dark">locaties Bekijken</button>
                    </div>

                    <div class="row">
                      <button onclick="location.href= 'createLocatie'" class="btn btn-dark">Locatie toevoegen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
