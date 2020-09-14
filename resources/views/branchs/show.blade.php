@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="{{$branch->image}}" class="img-thumbnail" style="width:200px; margin-bottom: 20px">
            <h2 class="">{{$branch->name}}</h2>
            <p class="lead"><b>Estatus:</b> {{$branch->status}}</p>
        </div>
    </div>
@endsection
