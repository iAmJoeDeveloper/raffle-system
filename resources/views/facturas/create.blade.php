@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cargar factura</h2>
        <br>
        <div class="row">
            <form action="{{url('/facturas')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <h4>Cliente</h4>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" disabled value="{{$user->name}}">
                    </div>

                    <div class="col-md-6">
                        <label for="lastName">Apellido</label>
                        <input type="text" class="form-control" name="lastName" disabled value="{{$user->lastName}}">
                    </div>

                </div>

                <div class="form-group">
                    <label for="documentNumber">Numero de Identificacion</label>
                    <input type="text" class="form-control" name="documentNumber" disabled value="{{$user->documentNumber}}">
                </div>

                <br>

                <h4>Datos de la Factura</h4>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="invoiceDate" class="">Fecha de Facturacion</label>
                            <input id="invoiceDate" type="date" class="form-control" name="invoiceDate" required>
                            @error('invoiceDate')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="invoiceNumber">Número de Factura</label>
                            <input placeholder="Escriba el número de su factura" type="text" class="form-control" name="invoiceNumber" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">Monto</label>
                            <small style="color: red;">Utilice el punto (.) solo para los decimales</small>
                            <input placeholder="Monto de la factura en RD$" type="number" class="form-control" name="amount" id="amount" step="any" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '€ ', 'placeholder': '0'" required>
                        
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="commerce_id">Comercio</label>
                            <select class="form-control" name="commerce_id">
                                @foreach($raffle->commerces->sortBy('name') as $commerce)
                                    <option value="{{$commerce->id}}">
                                        {{$commerce->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                            <div class="form-group">
                                <label for="paymentMethod_id">Método de Pago</label>
                                <select class="form-control" name="paymentMethod_id" id="paymentMethod_id">
                                    @foreach($payments as $id => $name)
                                        <option value="{{$id}}">
                                            {{$name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bank_id" id="label_bank" style="display:none;">Banco Emisor</label>
                                <select class="form-control" name="bank_id" id="bank_id" style="display:none;" disabled>
                                    <option value="" disabled selected>-- SELECCIONE --</option>
                                    @foreach($banks as $id => $name)
                                        <option value="{{$id}}">
                                            {{$name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="card_id" id="label_card" style="display:none;">Marca de Tarjeta de Pago</label>
                                <select class="form-control" name="card_id" id="card_id" style="display:none;" disabled>
                                    <option value="" disabled selected>-- SELECCIONE --</option>
                                    @foreach($cards as $id => $name)
                                        <option value="{{$id}}">
                                            {{$name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" >
                                <label for="ccnum" id="label_cc" style="display: none;">Numero de tarjeta</label>
                                <input class="form-control" type="text" name="ccnum" id="ccnum" style="display: none;" maxlength="4" placeholder="Primeros 4 dígitos de su tarjeta">
                            </div>


                            <i class="fab fa-cc-amex fa-2x" id="amex" style="display: none;"></i>
                            <i class="fab fa-cc-visa fa-2x" id="visa" style="display: none;"></i>
                            <i class="fab fa-cc-mastercard fa-2x" id="mastercard" style="display: none;"></i>
                            <i class="fab fa-cc-discover fa-2x" id="discover" style="display: none;"></i>
                            <div id="type"></div>

                            <div class="form-group">
                                <label for="image">Cargar Factura</label>
                                <br>
                                <input type="file" class="form-control-file" name="image" required>
                                <small style="color: red;">Por favor cargue una foto de su factura</small>
                            </div>



                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/jquery.mask.min.js') }}" defer></script>
    <script src="{{ asset('js/masks.js') }}" defer></script> --}}
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/cardValidator.js') }}" defer></script>
@endsection
