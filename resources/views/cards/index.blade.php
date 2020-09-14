@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tarjetas
            <a href="{{route('cards.create')}}"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Tarjeta</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cards as $card)
                <tr>
                    <td>{{$card->name}}</td>
                    <td>
                        <form action="{{route('cards.destroy', $card->id)}}" method="POST">
                            <a href="{{route('cards.show', $card->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                            <a href="{{route('cards.edit', $card->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="mx-auto">
                {{$cards->links()}}
            </div>
        </div>
    </div>
@endsection
