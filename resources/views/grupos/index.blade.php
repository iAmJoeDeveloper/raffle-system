@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Grupos de Premios
            <a href="grupos/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Crear Grupo</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Sucursal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->description}}</td>
                    <td>{{$group->branch->name}}</td>
                    <td>
                        <form action="{{route('grupos.destroy', $group->id)}}" method="POST">
                            <a href="{{route('grupos.show', $group->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('grupos.edit', $group->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
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
