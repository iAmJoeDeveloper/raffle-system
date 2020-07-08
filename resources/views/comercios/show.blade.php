@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="">{{$commerce->name}}</h2>
            <p><b>Nombre Legal:</b> {{$commerce->legalName}}</p>
            <p><b>RNC:</b> {{$commerce->rnc}}</p>
            <br>
            <h5 class=""><b>Piso: </b>{{$commerce->location->description}}</h5>
            <h5 class=""><b>Estatus: </b>{{$commerce->status}}</h5>
        </div>
    </div>
@endsection
