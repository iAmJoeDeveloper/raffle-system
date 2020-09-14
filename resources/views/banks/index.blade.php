@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Bancos
            <a href="{{route('banks.create')}}"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Agregar Banco</button></a>
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
            @foreach($banks as $bank)
                <tr>
                    <th scope="row">
                        <img src="{{$bank->image}}"  width="100px" height="50px">
                    </th>
                    <td>{{$bank->name}}</td>
                    <td>
                        <form action="{{route('banks.destroy', $bank->id)}}" method="POST">
                            <a href="{{route('banks.show', $bank->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('banks.edit', $bank->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="mx-auto">
                {{$banks->links()}}
            </div>
        </div>
    </div>


@endsection
