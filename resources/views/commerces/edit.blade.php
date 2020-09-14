@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Comercio</h2>
        <div class="row">
            <form action="{{route('commerces.update', $commerce->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Comercio</label>
                    <select class="form-control" name="location">

                        @foreach($locations as $id => $description)
                            <option value="{{$id}}" {{ ($commerce->location_id == $id) ? 'selected' : '' }}>
                                {{$description}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Nombre Comercial</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$commerce->name}}">
                </div>
                <div class="form-group">
                    <label for="legalName">Razón Social</label>
                    <input type="text" class="form-control" name="legalName" placeholder="Razón Social..." value="{{$commerce->legalName}}">
                </div>
                <div class="form-group">
                    <label for="rnc">RNC</label>
                    <input type="text" class="form-control" name="rnc" placeholder="RNC..." value="{{$commerce->rnc}}">
                </div>

                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Cargar Logo</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
