@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Sorteo</h2>
        <div class="row d-flex justify-content-center">
            <form action="{{route('raffles.index')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="image">Cargar Logo</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sorteos</label>
                    <select class="form-control" name="branchOffice">

                        @foreach($branchs as $id => $name)
                            <option value="{{$id}}">
                                {{$name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre...">
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripción...">
                </div>

                <div class="form-group">
                    <label for="voucherMessage">Mensaje para el Vouche</label>
                    <input type="text" class="form-control" name="voucherMessage" placeholder="Mensaje...">
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="start" >Inicio</label>
                        <input class="form-control" type="date" name="start">
                    </div>

                    <div class="col-6">
                        <label for="end" >Fin</label>
                        <input class="form-control" type="date" name="end">
                    </div>
                </div>

                <br>

{{--COMMERCE_RAFFLE--}}

                <div class="container">
                    <h4 style="background-color:#3498db; color: white;">Comercios Participantes</h4>
                    <input type="checkbox" id="select-all" name="select-all"> Check All
                    <hr />

                    <div class="row overflow-auto" style="max-width:750px; max-height: 400px; ">
                        @foreach($commerces as $id => $name)
                            <div class="card" style="width: 14rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$name}}</h5>
                                    <p class="card-text"><input type="checkbox" value="{{$id}}" name="commerces[]"></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <br>

{{--                --}}

{{--CONDITION_RAFFLE 1--}}
{{--                <h4 style="background-color:#3498db; color: white;">Condiciones</h4>--}}
{{--                <div class="form-group row">--}}
{{--                    <div class="col-4">--}}
{{--                        <label for="condition">Condicion</label>--}}
{{--                        <select required class="form-control" id="condition1" name="condition1">--}}
{{--                            <option selected="true" disabled="disabled">--- Seleccione ---</option>--}}
{{--                            @foreach($conditions as $id => $name)--}}
{{--                                <option value="{{$id}}">{{$name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                    <div class="col-4">--}}
{{--                        <label for="value1">Valor</label>--}}
{{--                        <input type="number" class="form-control" name="value1" id="value1">--}}
{{--                    </div>--}}

{{--                    <div class="col-4">--}}
{{--                        <label for="ta1">Tickets Adicionales</label>--}}
{{--                        <input type="number" class="form-control" name="ta1" id="ta1">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
                <br>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('select-all').onclick = function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        }
    </script>
@endsection

@section('script')
    <script src="{{asset('js/checkall.js')}}" defer></script>
@endsection
