@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Condicion</h2>
        <div class="row">
            <form action="{{route('conditions.update', $condition->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="conditionType">Tipo</label>
                    <select class="form-control" name="conditionType">
                        <option value="Banco" {{ old('conditionType',$condition->conditionType) == 'Banco' ? 'selected' : '' }}>Banco</option>
                        <option value="Efectivo" {{ old('conditionType',$condition->conditionType) == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
                        <option value="Cheque" {{ old('conditionType',$condition->conditionType) == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                        <option value="Comercio" {{ old('conditionType',$condition->conditionType) == 'Comercio' ? 'selected' : '' }}>Comercio</option>
                        <option value="Ubicacion" {{ old('conditionType',$condition->conditionType) == 'Ubicacion' ? 'selected' : '' }}>Ubicacion</option>
                        <option value="Tarjeta de Pago" {{ old('conditionType',$condition->conditionType) == 'Tarjeta de Pago' ? 'selected' : '' }}>Tarjeta de Pago</option>
                        <option value="Marca de Tarjeta de Pago" {{ old('conditionType',$condition->conditionType) == 'Marca de Tarjeta de Pago' ? 'selected' : '' }}>Marca de Tarjeta de Pago</option>
                        <option value="Monto Consumido" {{ old('conditionType',$condition->conditionType) == 'Monto Consumido' ? 'selected' : '' }}>Monto Consumido</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$condition->name}}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
