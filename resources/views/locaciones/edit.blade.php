@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Locacion</h2>
        <div class="row">
            <form action="{{route('locaciones.update', $location->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sucursal</label>
                    <select class="form-control" name="branchOffice">

                        @foreach($branchs as $id => $name)
                            <option value="{{$id}}" {{ ($location->branchOffice_id == $id) ? 'selected' : '' }}>
                                {{$name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripcion..." value="{{$location->description}}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
