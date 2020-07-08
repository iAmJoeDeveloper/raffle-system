@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Método de Pago</h2>
        <div class="row">
            <form action="{{url('/pagos')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre...">
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
