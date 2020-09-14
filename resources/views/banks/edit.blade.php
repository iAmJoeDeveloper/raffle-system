@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Banco</h2>
        <div class="row">
            <form action="{{route('banks.update', $bank->id)}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$bank->name}}">
                </div>

                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">{{$bank->image}}</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
