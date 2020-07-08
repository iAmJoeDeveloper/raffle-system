@extends('layouts.app')

@section('content2')

{{--        <div class="container">--}}
{{--            <img src="{{$raffle->image}}" class="img-thumbnail" width="200px">--}}
{{--            <br>--}}
{{--            <h2 class="">{{$raffle->name}}</h2>--}}
{{--            <h5><b>Sucursal: </b>{{$raffle->branch->name}}</h5>--}}
{{--            <p><b>Descripcion: </b>{{$raffle->description}}</p>--}}
{{--            <br>--}}
{{--            <h5 class=""><b>Inicio: </b>{{$raffle->start}}</h5>--}}
{{--            <h5 class=""><b>Fin: </b>{{$raffle->end}}</h5>--}}
{{--            <br>--}}
{{--            <p><b>Voucher Mensaje: </b>{{$raffle->voucherMessage}}</p>--}}
{{--            <p><b>Estatus: </b>{{$raffle->status}}</p>--}}
{{--            <br>--}}
{{--            <div>--}}
{{--                <h3>Comercios Participantes</h3>--}}
{{--                @foreach($raffle->commerces as $commerce)--}}
{{--                    <p>{{$commerce->name}}</p>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--            <br>--}}
{{--            <div>--}}
{{--                <h3>Condiciones Asociadas</h3>--}}
{{--                @foreach($raffle->parameters as $parameter)--}}
{{--                    <p>{{$parameter->condition_id}}</p>--}}
{{--                    @foreach($conditions as $condition)--}}
{{--                        @if($parameter->condition_id == $condition->id)--}}
{{--                            <p>{{$condition->name}}</p>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div>--}}
{{--                <h3>Premios</h3>--}}
{{--                @foreach($raffle->prizes as $prize)--}}
{{--                    <p>{{$prize->prizeGroup_id}}</p>--}}
{{--                    <p>{{$prize->name}}</p>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{$raffle->image}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{$raffle->name}}</b></h5>
                                    <br>
                                    <span style="color: #00A1DF;"><b>{{$raffle->branch->name}}</b></span>
                                    <p class="card-text">{{$raffle->description}}</p>
                                    <small class="badge badge-success">{{$raffle->status}}</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Fecha de Inicio</span>
                                    <span class="info-box-number">{{$raffle->start}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info-box mb-3 bg-warning">
                                <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Fecha de Fin</span>
                                    <span class="info-box-number">{{$raffle->end}}</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Comercios Participantes -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                            <!-- /.row -->

                            <!-- Comercios Participantes -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title"><b>Comercios Participantes</b></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Commercio</th>
                                                <th>Locación</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($raffle->commerces as $commerce)
                                                <tr>
                                                    <td>{{$commerce->id}}</td>
                                                    <td>{{$commerce->name}}</td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{$commerce->location->description}}</div>
                                                    </td>
                                                    <td><span class="badge badge-success">Activo</span></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Agregar nuevo comercio</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todos los comercios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.Comercios Participantes -->
                    <br>
                    <!-- Condiciones -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                            <!-- /.row -->

                            <!-- Condiciones Asociadas -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title"><b>Condiciones Asociadas</b></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($raffle->parameters as $parameter)
                                                <tr>
                                                    <td>{{$parameter->condition_id}}</td>
                                                    @foreach($conditions as $condition)
                                                        @if($parameter->condition_id == $condition->id)
                                                            <td>{{$condition->name}}</td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Agregar nuevo comercio</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todos los comercios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.Condiciones -->
                    <br>
                    <!-- Premios -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                            <!-- /.row -->

                            <!-- Premios -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title"><b>Premios </b> <i class="fas fa-trophy"></i></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($raffle->prizes as $prize)
                                                <tr>
                                                    <td>{{$prize->prizeGroup->description}}</td>
                                                    <td>{{$prize->name}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Agregar nuevo comercio</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todos los comercios</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.Premios -->
                </div>


            </section>
            <!-- /.content -->

@endsection
