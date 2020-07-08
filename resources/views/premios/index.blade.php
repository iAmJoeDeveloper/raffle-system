@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Premios
            <a href="premios/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Crear Premio</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
                <th scope="col">Sorteo</th>
                <th scope="col">Grupo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prizes as $prize)
                <tr>
                    <td>{{$prize->name}}</td>
                    <td>{{$prize->description}}</td>
                    <td>{{$prize->quantity}}</td>
                    <td>{{$prize->value}}</td>
                    <td>{{$prize->raffle_id}}</td>
                    <td>{{$prize->prizeGroup_id}}</td>
                    <td>
                        <form action="{{route('premios.destroy', $prize->id)}}" method="POST">
                            <a href="{{route('premios.show', $prize->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('premios.edit', $prize->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
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
