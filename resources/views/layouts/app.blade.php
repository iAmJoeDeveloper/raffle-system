<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Bluemall</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/mystyles.css') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
        rel="stylesheet"
    />
    @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                ><i class="fas fa-bars"></i
                    ></a>
            </li>
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="index3.html" class="nav-link">Home</a>--}}
{{--            </li>--}}

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search"/>
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                    <span class="badge badge-warning navbar-badge">U</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        @else
                            <b>

                            {{ Auth::user()->name }} {{ Auth::user()->lastName }}
                            </b>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                    @csrf
                                </form>

                        @endguest
                    </span>

                    <div class="dropdown-divider"></div>
                </div>
            </li>
            
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->

        <a href="{{ url('/') }}" class="brand-link">
            <img src="{{asset('dist/img/bmsd.svg')}}" alt="logoBluemall" class="img-thumbnail">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                        src="{{asset("dist/img/userdefault.png")}}"
                        class="img-circle elevation-2"
                        alt="User Image"
                    />
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }} {{Auth::user()->lastName}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul
                    class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false"
                >
                    <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
{{--                    --}}
{{--                    --}}



                    @can('administrador')
                    <li class="nav-item">
                        <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    @endcan

                        {{--Facturas--}}
                        <li class="nav-item">
                            <a href="{{route('invoices.index')}}"
                               class="{{ Request::path() === 'invoices' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fas fa-receipt"></i>
                                <p>
                                    Registrar Factura
                                </p>
                            </a>
                        </li>

                    @can('administrador')
                    <li class="nav-item">
                        <a href="{{url('facturasListado')}}" class="{{ Request::path() === 'facturasListado' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>Listado de Facturas</p>
                        </a>
                    </li>
                    @endcan

                    @can('cliente')
                    {{--Tickets--}}
                    <li class="nav-item">
                        <a href="{{url('tickets')}}"
                           class="{{ Request::path() === 'tickets' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>
                                Tickets 
                            </p>
                        </a>
                    </li>

                        {{--Facturas Registradas--}}
                        <li class="nav-item">
                            <a href="{{url('facturasRegistradas')}}"
                               class="{{ Request::path() === 'facturasRegistradas' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Facturas Registradas
                                </p>
                            </a>
                        </li>
                    @endcan

                        @can('administrador')

                    {{--Metodos de Pago--}}
                        <li class="nav-item">
                            <a href="{{url('pagos')}}"
                               class="{{ Request::path() === 'pagos' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fas fa-money-bill-alt"></i>
                                <p>
                                    Métodos de Pago
                                </p>
                            </a>
                        </li>

                    {{--Premios--}}
                    <li class="nav-item">
                        <a href="{{url('premios')}}"
                           class="{{ Request::path() === 'premios' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-gift"></i>
                            <p>
                                Premios
                            </p>
                        </a>
                    </li>

                    {{--Grupos--}}
                    <li class="nav-item">
                        <a href="{{url('grupos')}}"
                           class="{{ Request::path() === 'grupos' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-layer-group"></i>
                            <p>
                                Grupos
                            </p>
                        </a>
                    </li>
                    {{--Sorteos--}}
                    <li class="nav-item">
                        <a href="{{route('raffles.index')}}"
                           class="{{ Request::path() === 'raffles' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                                Sorteos
                            </p>
                        </a>
                    </li>
                    {{--Comercios--}}
                    <li class="nav-item">
                        <a href="{{route('commerces.index')}}"
                           class="{{ Request::path() === 'comercios' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Comercios
                            </p>
                        </a>
                    </li>
                    {{--Locaciones--}}
                    <li class="nav-item">
                        <a href="{{route('locations.index')}}"
                           class="{{ Request::path() === 'locaciones' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-map-pin"></i>
                            <p>
                                Locaciones
                            </p>
                        </a>
                    </li>
                    {{--banks--}}
                    <li class="nav-item">
                        <a href="{{route('banks.index')}}"
                           class="{{ Request::path() === 'bancos' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-piggy-bank"></i>
                            <p>
                                Bancos
                            </p>
                        </a>
                    </li>
                    {{--Condicionales--}}
                    <li class="nav-item">
                        <a href="{{route('conditions.index')}}"
                           class="{{ Request::path() === 'condiciones' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Condiciones
                            </p>
                        </a>
                    </li>

                        {{--Parametros--}}
                        <li class="nav-item">
                            <a href="{{url('parametros')}}"
                               class="{{ Request::path() === 'parametros' ? 'nav-link active' : 'nav-link' }}">
                                <i class="nav-icon fas fa-wrench"></i>
                                <p>
                                    Parametros
                                </p>
                            </a>
                        </li>

                    <li class="nav-item">
                        <a href="{{route('cards.index')}}"
                           class="{{ Request::path() === 'tarjetas' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas  fa-credit-card"></i>
                            <p>
                                Tarjetas
                            </p>
                        </a>
                    </li>

                    {{--Sucursales--}}
                    <li class="nav-item">
                        <a href="{{route('branchs.index')}}"
                           class="{{ Request::path() === 'sucursales' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Sucursales
                            </p>
                        </a>
                    </li>

                    {{--                            @can('administrador')--}}
                    <li class="nav-item">
                        <a href="{{url('usuarios')}}"
                           class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Usuarios
                            </p>
                        </a>
                    </li>
                    @endcan
{{--                    --}}
{{--                    --}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><b>Raffle</b> System</h1>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        @yield('content2')
    </div>
    <!-- /.content-wrapper -->

    

    <!-- Main Footer -->
{{--    <footer class="main-footer">--}}
{{--        <!-- To the right -->--}}
{{--        <div class="float-right d-none d-sm-inline">--}}
{{--            <strong>Copyright &copy; 2020--}}
{{--                <a href="#">Raviga Solutions</a>.</strong>--}}
{{--            All rights reserved.--}}
{{--        </div>--}}
{{--        <!-- Default to the left -->--}}
{{--    </footer>--}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
@include('sweetalert::alert')
@yield('scripts')
</body>
</html>
