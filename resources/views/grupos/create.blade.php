@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Grupo de Premios</h2>
        <div class="row">
            <form action="{{url('/grupos')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="branchOffice_id">Sucursal</label>
                    <select name="branchOffice_id" id="branchOffice_id" class="form-control">
                        @foreach($branchs as $id => $name)
                            <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripcion...">
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
