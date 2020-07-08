@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="">{{$card->name}}</h2>
            <p class="lead"><b>Estatus:</b> {{$card->status}}</p>
        </div>
    </div>
@endsection
