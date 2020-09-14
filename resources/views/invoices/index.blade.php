@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Sorteos - Factura</h2>
        <br>

        <div class="row">
            @foreach ($raffles as $raffle)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="{{$raffle->image}}" class="card-img-top" alt="..." style="max-height: 150px;">
                <div class="card-body">
                    <h5 class="card-title">{{$raffle->name}}</h5>
                    <p class="card-text">{{$raffle->description}}</p>
                    <p style="font-size: 15px;"><b>desde: </b>{{$raffle->start}}  -  <b>Hasta: </b>{{$raffle->end}}</p>
                    <a href="{{route('invoices.create')}}" class="btn btn btn-success"><i class="fas fa-plus-circle"></i> Registrar Factura</a>
                </div>
             </div>
            </div>
        @endforeach
        </div>


        {{-- <div class="card" style="width: 18rem;">
            <img src="{{$raffle->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$raffle->name}}</h5>
                <p class="card-text">{{$raffle->description}}</p>
                <p style="font-size: 15px;"><b>desde: </b>{{$raffle->start}}  -  <b>Hasta: </b>{{$raffle->end}}</p>
                <a href="invoices/create" class="btn btn btn-success"><i class="fas fa-plus-circle"></i> Registrar Factura</a>
            </div>
        </div> --}}
    </div>
@endsection
