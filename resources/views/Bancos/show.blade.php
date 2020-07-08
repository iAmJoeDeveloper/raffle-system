@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="{{$bank->image}}" class="img-thumbnail" style="width:200px; margin-bottom: 20px">
            <h2 class="">{{$bank->name}}</h2>
            <p class="lead"><b>Estatus:</b> {{$bank->status}}</p>
        </div>
    </div>
@endsection
