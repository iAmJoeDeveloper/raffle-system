@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <h2>Sucursales--}}
{{--            <a href="sucursales/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Sucursal</button></a>--}}
{{--        </h2>--}}
{{--    </div>--}}

<div class="container">
    <h2>Sucursales
        <a href="sucursales/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Sucursal</button></a>
    </h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Logo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($branchs as $branch)
            <tr>
                <th scope="row">
                    <img src="{{$branch->image}}"  width="50px" height="50px">
                </th>
                <td>{{$branch->name}}</td>
                <td>
                    <form action="{{route('sucursales.destroy', $branch->id)}}" method="POST">
                        <a href="{{route('sucursales.show', $branch->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                        <a href="{{route('sucursales.edit', $branch->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
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
