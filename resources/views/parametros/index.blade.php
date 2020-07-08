@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Parametros
            <a href="parametros/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Configurar Parametro</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de Condicion</th>
                <th scope="col">Ligada a</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parameters as $parameter)
                <tr>
                    <td>{{$parameter->value}}</td>
                    <td>{{$parameter->conditions->conditionType}}</td>
                    <td>{{$parameter->raffles->name}}</td>
                    <td>
                        <form action="{{route('parametros.destroy', $parameter->id)}}" method="POST">
                            <a href="{{route('parametros.show', $parameter->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                            <a href="{{route('parametros.edit', $parameter->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
