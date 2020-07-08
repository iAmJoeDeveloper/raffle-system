@extends('layouts.app')

@section('content')
    <h2>Editar Sucursal</h2>
    <div class="container">
        <div class="row">
            <form action="{{route('sucursales.update', $sucursal->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$sucursal->name}}">
                </div>

                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" >
                        <label class="custom-file-label" for="inputGroupFile01">{{$sucursal->image}}</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
