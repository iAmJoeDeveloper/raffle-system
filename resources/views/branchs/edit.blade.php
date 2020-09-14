@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-default" href="{{url()->previous()}}"><i class="fas fa-arrow-circle-left"></i></a>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="form-group">
                <h2 class="">Editar Sucursal</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="{{route('branchs.update', $sucursal->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$sucursal->name}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" >
                        <label class="custom-file-label" for="inputGroupFile01">{{$sucursal->image}}</label>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection