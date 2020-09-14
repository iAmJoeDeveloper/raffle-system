@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="">{{$location->description}}</h2>
            <br>
            <h5 class=""><b>Sucursal: </b>{{$location->branch->name}}</h5>
            <h5 class=""><b>Estatus: </b>{{$location->status}}</h5>
        </div>
    </div>
@endsection
