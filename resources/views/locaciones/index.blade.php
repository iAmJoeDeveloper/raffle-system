@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Locaciones
            <a href="locaciones/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar locacion</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
                <tr>
                    <td>{{$location->description}}</td>
                    <td>{{$location->branch->name}}</td>
                    <td>
                        <form action="{{route('locaciones.destroy', $location->id)}}" method="POST">
                            <a href="{{route('locaciones.show', $location->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                            <a href="{{route('locaciones.edit', $location->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
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
                {{$locations->links()}}
            </div>
        </div>
    </div>
@endsection
