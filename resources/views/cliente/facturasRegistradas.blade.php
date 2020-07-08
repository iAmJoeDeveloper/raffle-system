@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Facturas Registradas</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">N. Factura</th>
                <th scope="col">Monto</th>
                <th scope="col">Descargar Voucher</th>
            </tr>
            </thead>
            <tbody>
                @foreach($facturas as $fact)
                    <tr>
                        <td><i class="fas fa-file-invoice" style="color: #00A1DF"></i> {{$fact->invoiceNumber}}</td>
                        <td>RD$ {{$fact->amount}}</td>
                        <td><a href="{{url('/voucher',$fact->id)}}" target="_blank"><button class="btn btn-primary"><i class="fas fa-download"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

