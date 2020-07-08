@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tickets</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Sorteo</th>
                <th scope="col">N. Factura</th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($tickets as $ticket)--}}
{{--                <tr>--}}
{{--                    <td>{{$ticket->invoices->id}}</td>--}}
{{--                    <td>--}}
{{--                        <form action="{{route('tickets.destroy', $ticket->id)}}" method="POST">--}}
{{--                            <a href="{{route('tickets.show', $ticket->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>--}}
{{--                            <a href="{{route('tickets.edit', $ticket->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')">Eliminar</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}

            @foreach($tickets as $ticket)
                @foreach($facturas as $fact)
                    @if($ticket->invoice_id == $fact->id)
                        <tr>
                            <td><i class="fas fa-ticket-alt" style="color: #00A1DF"></i> {{$ticket->ticketNumber}}</td>
                            <td>{{$ticket->raffle->name}}</td>
                            <td>{{$ticket->invoice->invoiceNumber}}</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
