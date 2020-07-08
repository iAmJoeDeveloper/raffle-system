@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Usuarios
        <a href="usuarios/create"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Usuario</button></a>
        <a href="{{route('users.excel')}}"><button type="button" class="btn btn-info float-right" style="margin-right: 10px;"><i class="fas fa-file-excel"></i></button></a>
    </h2>
    @if($search)
    <h6>
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '{{$search}}' son:
        </div>
    </h6>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach($user->roles as $role)
                        {{$role->name}}
                    @endforeach
                </td>
                <td>
                    <form action="{{route('usuarios.destroy', $user->id)}}" method="POST">
                        <a href="{{route('usuarios.show', $user->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                        <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
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
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection
