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
                    <button onclick="location.href='item/create'" class="btn btn-dark">Bestelling maken</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
