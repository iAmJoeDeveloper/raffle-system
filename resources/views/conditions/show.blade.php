@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="">{{$condition->name}}</h2>
            <br>
            <h5 class=""><b>Tipo: </b>{{$condition->conditionType}}</h5>
            <h5 class=""><b>Estatus: </b>{{$condition->status}}</h5>
        </div>
    </div>
@endsection
