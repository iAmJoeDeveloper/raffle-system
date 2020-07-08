@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/usuarios" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" name="email" placeholder="Email...">
                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select name="rol" class="form-control">
                            <option selected disabled>Selecciona un Rol</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="passwords">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password...">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
