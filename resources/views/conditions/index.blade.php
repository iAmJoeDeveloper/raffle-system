@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Condiciones
            <a href="{{route('conditions.create')}}"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Condicion</button></a>
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
                        <form action="{{route('conditions.destroy', $condition->id)}}" method="POST">
                            <a href="{{route('conditions.show', $condition->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('conditions.edit', $condition->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
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
