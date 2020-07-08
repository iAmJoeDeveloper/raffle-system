@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Premios
            <a href="pagos/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Crear Metodo de Pago</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->name}}</td>
                    <td>
                        <form action="{{route('pagos.destroy', $payment->id)}}" method="POST">
                            <a href="{{route('pagos.show', $payment->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('pagos.edit', $payment->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
