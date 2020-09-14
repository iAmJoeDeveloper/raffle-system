@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Sorteos
            <a href="{{route('raffles.create')}}"><button type="button" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> Crear Sorteo</button></a>
        </h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Logo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Inicio</th>
                <th scope="col">Fin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($raffles as $raffle)
                <tr>
                    <th scope="row">
                        <img class="rounded-circle" src="{{$raffle->image}}"  width="50x" height="50px">
                    </th>
                    <td>{{$raffle->name}}</td>
                    <td>{{$raffle->branch->name}}</td>
                    <td>{{$raffle->start}}</td>
                    <td>{{$raffle->end}}</td>
                    <td>
                        <form action="{{route('raffles.destroy', $raffle->id)}}" method="POST">
                            <a href="{{route('raffles.show', $raffle->id)}}"><button type="button" class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                            <a href="{{route('raffles.edit', $raffle->id)}}"><button type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro desea borrar?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    <td>
                    <a href="{{url('sorteos/resultado', $raffle->id)}}"><button class="btn btn-warning"><i class="fas fa-trophy"></i></button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--        <div class="row">--}}
        {{--            <div class="mx-auto">--}}
        {{--                {{$locations->links()}}--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
