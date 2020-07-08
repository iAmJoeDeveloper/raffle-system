@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Condiciones
            <a href="condiciones/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Condicion</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Condicion</th>
                <th scope="col">Tipo de Condicion</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conditions as $condition)
                <tr>
                    <td>{{$condition->name}}</td>
                    <td>{{$condition->conditionType}}</td>
                    <td>
                        <form action="{{route('condiciones.destroy', $condition->id)}}" method="POST">
                            <a href="{{route('condiciones.show', $condition->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('condiciones.edit', $condition->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="mx-auto">
                {{$conditions->links()}}
            </div>
        </div>
    </div>
@endsection
