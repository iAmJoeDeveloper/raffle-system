@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Realizar Sorteo</h2>
        <br>
        <div style="background-color: #00A1DF; border-radius: 5px; color: white; padding: 20px; text-align: center;">
            <h1>{{$sorteo->name}}</h1>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h2>Premios</h2>
            </div>
            <br>
            
                @foreach($sorteo->prizes as $prize)
                    @foreach($prizeGroup as $group)
                        @if($group->id == $prize->prizeGroup_id)
                        <div class="card-body">
                            <h4>{{$group->description}}</h4>
                            <br>
                            <h5 class="card-title">{{$prize->name}}</h5>
                            <p class="card-text">{{$prize->description}}</p>
                            {{-- <a class="btn btn-primary" href="{{url('/winner',$sorteo->id."/".$prize->id)}}"> <i class="far fa-play-circle"> Escoger Ganador</i></a> --}}
                            <a class="btn btn-primary" href="{{route('winner',[$sorteo->id, $prize->id])}}"> <i class="far fa-play-circle"> Escoger Ganador</i></a>
                            </div>
                            @endif
                    @endforeach
                @endforeach
            
        </div>
        <hr>
        

        <div class="row">
            @forelse ($results as $result)
                @if ($result->prize_id == 1)
                    <div class="col-md-4">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-warning">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="{{asset("dist/img/user1-128x128.jpg")}}" alt="User Avatar">
                                    </div>

                                        <!-- /.widget-user-image -->
                                        @foreach($customers as $customer)
                                            @if($customer->id == $result->customer_id)
                                                <h3 class="widget-user-username">{{$customer->name}} {{ $customer->lastName }}</h3>
                                                @foreach($prizes as $prize)
                                                    @if($prize->id == $result->prize_id)
                                                        @foreach($prizeGroup as $group)
                                                            @if($group->id == $prize->prizeGroup_id)
                                                                <h5 class="widget-user-desc">{{$group->description}}</h5>
                                                                <p class="widget-user-desc">{{ $prize->name }}</p>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                </div>
                                            <div class="card-footer p-0">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                        <b>{{$customer->documentType}}: </b><span class="float-right">{{ $customer->documentNumber }}</span>
                                                        </a>
                                                    </li>

                                                     @foreach($tickets as $ticket)
                                                       @if ($ticket->id == $result->ticket_id)
                                                            <li class="nav-item">
                                                                <a class="nav-link">
                                                                <b>Número de Ticket: </b><span class="float-right">{{$ticket->ticketNumber}}</span>
                                                                </a>
                                                            </li>
                                                            @foreach($invoices as $invoice)
                                                                @if ($invoice->id == $ticket->invoice_id)
                                                                <li class="nav-item">
                                                                    <a class="nav-link">
                                                                    <b>Número de factura: </b><span class="float-right">{{$invoice->invoiceNumber}}</span>
                                                                    </a>
                                                                </li>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach

                                                    <li class="nav-item">
                                                        <a class="btn nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            <b>Contacto <i class="fas fa-sort-down"></i></b> 
                                                        </a>

                                                        <div class="collapse" id="collapseExample">
                                                            <div class="card card-body">
                                                                <p><b><i class="fas fa-envelope"></i> </b>{{ $customer->email }}</b>
                                                                <p><b><i class="fas fa-phone"></i> </b>{{ $customer->phone }}</p>
                                                            </div>
                                                        </div>
                                                                              
                                                    </li>
                                              </ul>  
                                            </div>          
                                         @endif
                                    @endforeach
                                {{-- <p>{{ $result->prize_id }}</p> --}}
                            </div>
                    </div>
                @elseif($result->prize_id == 2)
                    <div class="col-md-4">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-warning">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="{{asset("dist/img/user1-128x128.jpg")}}" alt="User Avatar">
                                    </div>

                                        <!-- /.widget-user-image -->
                                        @foreach($customers as $customer)
                                            @if($customer->id == $result->customer_id)
                                                <h3 class="widget-user-username">{{$customer->name}} {{ $customer->lastName }}</h3>
                                                @foreach($prizes as $prize)
                                                    @if($prize->id == $result->prize_id)
                                                        @foreach($prizeGroup as $group)
                                                            @if($group->id == $prize->prizeGroup_id)
                                                                <h5 class="widget-user-desc">{{$group->description}}</h5>
                                                                <p class="widget-user-desc">{{ $prize->name }}</p>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                </div>
                                            <div class="card-footer p-0">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                        <b>{{$customer->documentType}}: </b><span class="float-right">{{ $customer->documentNumber }}</span>
                                                        </a>
                                                    </li>

                                                     @foreach($tickets as $ticket)
                                                       @if ($ticket->id == $result->ticket_id)
                                                            <li class="nav-item">
                                                                <a class="nav-link">
                                                                <b>Número de Ticket: </b><span class="float-right">{{$ticket->ticketNumber}}</span>
                                                                </a>
                                                            </li>
                                                            @foreach($invoices as $invoice)
                                                                @if ($invoice->id == $ticket->invoice_id)
                                                                <li class="nav-item">
                                                                    <a class="nav-link">
                                                                    <b>Número de factura: </b><span class="float-right">{{$invoice->invoiceNumber}}</span>
                                                                    </a>
                                                                </li>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach

                                                    <li class="nav-item">
                                                        <a class="btn nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            <b>Contacto <i class="fas fa-sort-down"></i></b> 
                                                        </a>

                                                        <div class="collapse" id="collapseExample">
                                                            <div class="card card-body">
                                                                <p><b><i class="fas fa-envelope"></i> </b>{{ $customer->email }}</b>
                                                                <p><b><i class="fas fa-phone"></i> </b>{{ $customer->phone }}</p>
                                                            </div>
                                                        </div>
                                                                              
                                                    </li>
                                              </ul>  
                                            </div>          
                                         @endif
                                    @endforeach
                                {{-- <p>{{ $result->prize_id }}</p> --}}
                            </div>
                    </div>
                @endif    
            @empty
                <p>No hay ganadores aún</p>
            @endforelse
        </div>
    </div>
@endsection
