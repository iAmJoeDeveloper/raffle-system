@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Tarjeta</h2>
        <div class="row">
            <form action="{{route('cards.update', $card->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$card->name}}">
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
