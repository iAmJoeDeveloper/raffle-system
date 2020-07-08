@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Premio</h2>
        <div class="row">
            <form action="{{url('/premios')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="raffle_id">Sorteo</label>
                    <select name="raffle_id" class="form-control">
                        @foreach($raffles as $id => $name)
                            <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre...">
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripcion...">
                </div>

                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" class="form-control" name="quantity" placeholder="Cantidad...">
                </div>

                <div class="form-group">
                    <label for="value">Valor Monetario</label>
                    <input type="number" class="form-control" name="value" placeholder="Valor...">
                </div>

                <div class="form-group">
                    <label for="group">Grupo de Premio</label>
                    <select name="prizeGroup_id" id="prizeGroup_id" class="form-control">
                        @foreach($groups as $id => $description)
                            <option value="{{$id}}">{{$description}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
