@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Facturas Registradas</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">N. Factura</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Método de Pago</th>
                    <th scope="col">Banco</th>
                    <th scope="col">Tarjeta</th>
                    <th scope="col">Número de Tarjeta</th>
                    <th scope="col">Comercio</th>
                    <th scope="col">Sorteo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                    <tr>
                        <td><i class="fas fa-file-invoice" style="color: #00A1DF"></i> {{$invoice->invoiceNumber}}</td>
                        <td>RD$ <span style="color:green; font-weight:bold;">{{$invoice->amount}}</span></td>
                        <td>{{$invoice->users->name}} {{$invoice->users->lastName}}</td>
                        <td>{{$invoice->payment->name}}</td>
                        <td>{{$invoice->bank['name']}}</td>
                        <td>{{$invoice->card['name']}}</td>
                        <td>{{$invoice->cardNumber}}</td>
                        <td>{{$invoice->comercio->name}}</td>
                        <td>{{$invoice->sorteos->name}}</td>
                        <td>{{$invoice->invoiceDate}}</td>
                        <td><a href="{{route('factura.show', $invoice->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="mx-auto">
                {{$invoices->links()}}
            </div>
        </div>
    </div>
@endsection

