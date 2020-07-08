@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Condicion</h2>
        <div class="row">
            <form action="{{url('/condiciones')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" name="conditionType">
                        <option>Banco</option>
                        <option>Efectivo</option>
                        <option>Cheque</option>
                        <option>Comercio</option>
                        <option>Ubicacion</option>
                        <option>Tarjeta de Pago</option>
                        <option>Marca de Tarjeta de Pago</option>
                        <option>Monto Consumido</option>
                    </select>
                </div>
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
