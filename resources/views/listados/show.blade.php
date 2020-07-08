@extends('layouts.app')

@section('content')
    <div class="container">
    	@foreach($invoice as $item)
        			<h2 class="">Visualización de Factura</h2>
        			<br>
        			<h4><b>Número de Fatura: </b>{{$item->invoiceNumber}}</h4>
                    <h4><b>Monto: </b>RD$ <span style="color:green; font-weight:bold;">{{$item->amount}}</span></h4>
                    <h4><b>Cliente: </b>{{$item->users->name}} {{$item->users->lastName}}</h4>
                    <h4><b>Método de Pago: </b>{{$item->payment->name}}</h4>
                    <h4><b>Banco: </b>{{$item->bank['name']}}</h4>
                    <h4><b>Tarjeta: </b>{{$item->card['name']}}</h4>
                    <h4><b>Número de tarjeta: </b>{{$item->cardNumber}}</h4>
                    <h4><b>Comercio: </b>{{$item->comercio->name}}</h4>
                    <h4><b>Sorteo: </b>{{$item->sorteos->name}}</h4>
                    <h4><b>Fecha: </b>{{$item->invoiceDate}}</h4>
                    <br>
                    <img src="{{$item->image}}">
        @endforeach
    </div>
@endsection