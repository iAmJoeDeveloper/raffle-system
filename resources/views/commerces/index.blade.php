@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Comercios
            <a href="{{route('commerces.create')}}"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Comercio</button></a>
            <a href="{{route('commerces.excel')}}"><button type="button" class="btn btn-info float-right" style="margin-right: 10px;"><i class="fas fa-file-excel"></i></button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Razón Social</th>
                <th scope="col">RNC</th>
                <th scope="col">Locación</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($commerces as $commerce)
                <tr>
                    <td>{{$commerce->name}}</td>
                    <td>{{$commerce->legalName}}</td>
                    <td>{{$commerce->rnc}}</td>
                    <td>{{$commerce->location->description}}</td>
                    <td>
                        <form action="{{route('commerces.destroy', $commerce->id)}}" method="POST">
                            <a href="{{route('commerces.show', $commerce->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                            <a href="{{route('commerces.edit', $commerce->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
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
                {{$commerces->links()}}
            </div>
        </div>
    </div>
@endsection
