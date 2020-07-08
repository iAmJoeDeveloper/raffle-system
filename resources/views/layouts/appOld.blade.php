<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bluemall</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search"
                            aria-label="Search">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{asset("dist/img/user1-128x128.jpg")}}" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{asset("dist/img/user8-128x128.jpg")}}" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-blue-primary elevation-4">
                <!-- Brand Logo -->
                <div class="">
                    <a href="{{ url('/') }}" class="brand-link" style="margin-bottom: -50px; margin-top: -20px">
                        <img src="{{asset('dist/img/bmsd.svg')}}" alt="AdminLTE Logo" class="img-thumbnail"
                             style="opacity: .8">
                    </a>
                    <h4 class="brand-text" style="text-align: center; margin-bottom: 40px;"><b>Raffle</b> System</h4>
                </div>

                <div class="dropdown-divider"></div>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                @else
                                {{ Auth::user()->name }}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>
{{--Premios--}}
                            <li class="nav-item">
                                <a href="{{url('premios')}}"
                                   class="{{ Request::path() === 'premios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-gift"></i>
                                    <p>
                                        Premios
                                        <?php $prizes_count = DB::table('prizes')->count(); ?>
                                        <span class="right badge badge-danger">{{ $prizes_count ?? '0' }}</span>
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
                                        <?php $groups_count = DB::table('prizeGroups')->count(); ?>
                                        <span class="right badge badge-danger">{{ $groups_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
{{--Sorteos--}}
                            <li class="nav-item">
                                <a href="{{url('sorteos')}}"
                                   class="{{ Request::path() === 'sorteos' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-clipboard-list"></i>
                                    <p>
                                        Sorteos
                                        <?php $raffles_count = DB::table('raffles')->count(); ?>
                                        <span class="right badge badge-danger">{{ $raffles_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                            {{--Comercios--}}
                            <li class="nav-item">
                                <a href="{{url('comercios')}}"
                                   class="{{ Request::path() === 'comercios' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-store"></i>
                                    <p>
                                        Comercios
                                        <?php $commerces_count = DB::table('commerces')->count(); ?>
                                        <span class="right badge badge-danger">{{ $commerces_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                            {{--Locaciones--}}
                            <li class="nav-item">
                                <a href="{{url('locaciones')}}"
                                   class="{{ Request::path() === 'locaciones' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-map-pin"></i>
                                    <p>
                                        Locaciones
                                        <?php $locations_count = DB::table('locations')->count(); ?>
                                        <span class="right badge badge-danger">{{ $locations_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
{{--Bancos--}}
                            <li class="nav-item">
                                <a href="{{url('bancos')}}"
                                   class="{{ Request::path() === 'bancos' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-piggy-bank"></i>
                                    <p>
                                        Bancos
                                        <?php $banks_count = DB::table('banks')->count(); ?>
                                        <span class="right badge badge-danger">{{ $banks_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
{{--Condicionales--}}
                            <li class="nav-item">
                                <a href="{{url('condiciones')}}"
                                   class="{{ Request::path() === 'condiciones' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Condiciones
                                        <?php $conditions_count = DB::table('conditions')->count(); ?>
                                        <span class="right badge badge-danger">{{ $conditions_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('tarjetas')}}"
                                   class="{{ Request::path() === 'tarjetas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas  fa-credit-card"></i>
                                    <p>
                                        Tarjetas
                                        <?php $cards_count = DB::table('cards')->count(); ?>
                                        <span class="right badge badge-danger">{{ $cards_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>

{{--                            Sucursales--}}
                            <li class="nav-item">
                                <a href="{{url('sucursales')}}"
                                   class="{{ Request::path() === 'sucursales' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-building"></i>
                                    <p>
                                        Sucursales
                                        <?php $branchs_count = DB::table('branchOffices')->count(); ?>
                                        <span class="right badge badge-danger">{{ $branchs_count ?? '0' }}</span>
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
                                        {{--<!--                                        --><?php //use App\User; $users_count = User::all()->count(); ?>--}}
                                        <?php $users_count = DB::table('users')->count(); ?>
                                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
{{--                            @endcan--}}

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-sticky-note"></i>
                                    <p>Notas<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Todas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Favoritas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="notas/archivadas"
                                            class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Archivadas</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

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

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong>Raviga Solutions
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
@yield('script')
</body>

</html>
