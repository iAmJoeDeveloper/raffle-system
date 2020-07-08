@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Parametro</h2>
        <div class="row">
            <form action="{{url('/parametros')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="group">Condicion</label>
                    <select name="condition_id" id="condition_id" class="form-control">
                        @foreach($conditions as $id => $description)
                            <option value="{{$id}}">{{$description}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="value">Valor</label>
                    <input type="text" class="form-control" name="value" placeholder="Valor...">
                </div>

                <div class="form-group">
                    <label for="tickets">Tickets Adicionales</label>
                    <input type="text" class="form-control" name="tickets" placeholder="Tickets adicionales...">
                </div>
                

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
