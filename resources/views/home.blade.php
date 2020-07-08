@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Bienvenido!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenidos a la plataforma de sorteos de BlueMall Santo Domingo para nosotros es un placer que formes parte de la familia BlueMall.  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
