<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- @include('layouts.components.css') --}}

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Mis estilos  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Select2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />


</head>
    <body>
        {{-- <div id="app" class="super_container">
            @include('layouts.components.header')
            <div class="home">
                @include('layouts.components.slider')
            </div>
            <div  class="mt-5 container shadow-lg rounded">
            <h4 class="p-5 text-center text-uppercase">Registro de informacion del pasajero para su reserva</h4>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <ul class="nav nav-tabs  nav-fill flex-column  flex-sm-row" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">SERVICIO</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">INFORMACION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="contact" aria-selected="false">PAGOS</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @include('layouts.booking_tabs.service')
                                </div>
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('layouts.booking_tabs.information')
                                </div>
                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                    @include('layouts.booking_tabs.payment')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.components.footer')
        </div> --}}

    @include('layouts.components.new-header')

    <!-- section steps start -->
    <div class="container">
        <div class="row mt-3 steps border shadow-sm">
            <div class="col">
                <div
                    class="step-one d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                    <p class="mb-0">01</p>
                    <p class="text-center mb-2">Selecciona tu servicio</p>
                </div>
            </div>
            <div class="col">
                <div
                    class="step-two d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center step-active">
                    <p class="mb-0">02</p>
                    <p class="text-center mb-2">Tu informacion</p>
                </div>
            </div>
            <div class="col">
                <div
                    class="step-three d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                    <p class="mb-0">03</p>
                    <p class="text-center mb-2">Completa tu reservacion</p>
                </div>
            </div>
            {{-- <div class="col">
                <div
                    class="step-four d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                    <p class="mb-0">04</p>
                    <p class="text-center mb-2">Completa tu reservacion</p>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- section steps end -->

    <!-- section content start  -->
    <div class="container">
        <div class="row">
            <!-- section left start -->
            <div class="col-md-12 col-lg-8 mt-4">
                <div class="row">
                <a class="mb-2 back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> Regresar</a>
                </div>
                <form id="booking_form" method="POST">
                    @csrf

                    <!-- customer information start  -->
                    <div class="row form-section mb-4 shadow-sm border">
                        <h5 class="mt-2"><small class="number__section">01</small> Informacion del cliente</h5>
                        <div class="col-sm-4 col-md-4 mb-1">
                            <label for="name" class="form-label">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-user"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="name" name="name" aria-describedby="icon-user">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label for="paterno" class="form-label">Apellido Paterno</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-user"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label for="materno" class="form-label">Apellido Materno</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-user"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="materno" name="materno" aria-describedby="icon-user">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="phone-number" class="form-label">Numero Telefonico</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-phone"><i
                                        class="fas fa-phone input__icon"></i></span>
                                <input type="text" class="form-control" id="phone-number" aria-describedby="icon-phone">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="email" class="form-label">Correo Electronico</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-email"><i
                                        class="fas fa-envelope input__icon"></i></span>
                                <input type="text" class="form-control" id="email" aria-describedby="icon-email">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="countries" class="form-label">País</label>
                            <div class="input-group">
                                <label for="icon-globe" class="input-group-text"><i
                                        class="fas fa-globe-americas input__icon"></i></label>
                                <select required id="countries" name="country_id" class="form-select">
                                    <option selected value="null" disabled>Selecciona un pais...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-4">
                            <label for="states" class="form-label">Estado</label>
                            <div class="input-group">
                                <label for="icon-state" class="input-group-text"><i class="fas fa-location-arrow input__icon"></i></label>
                                <select required id="states" name="state_id" class="form-select">
                                    <option selected value="null" disabled>Selecciona un estado...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- customer information end -->


                    <!-- travel information start -->
                    @if($service === 'Hotel a Hotel')
                    
                    @elseif($service === 'Aeropuerto a Hotel')
                    <div class="row form-section mb-4 shadow-sm border">
                        <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                            <h5 class="title-arrival mb-0">Informacion de llegada</h5>
                            <div class="col-sm-6 col-md-6 mb-1">
                                <label for="arrival" class="form-label">Aerolinea de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-plane"><i
                                            class="fas fa-plane input__icon"></i></span>
                                    <input type="text" class="form-control" id="arrival" aria-describedby="icon-plane">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="flight-number" class="form-label">Numero de vuelo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hashtag"><i
                                            class="fas fa-hashtag input__icon"></i></span>
                                    <input type="text" class="form-control" id="flight-number"
                                        aria-describedby="icon-hashtag">
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-passenger"><i
                                            class="fas fa-user input__icon"></i></span>
                                    <input readonly type="text" class="form-control" id="passenger_arrival" aria-describedby="icon-passenger">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="date" class="form-label">Fecha de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-date"><i
                                            class="fas fa-calendar-alt input__icon"></i></span>
                                    <input type="date" class="form-control" id="date" aria-describedby="icon-date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 mb-4">
                                <label for="hour" class="form-label">Hora de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hour"><i
                                            class="fas fa-clock input__icon"></i></span>
                                    <input type="text" class="form-control" id="hour" aria-describedby="icon-hour">
                                </div>
                            </div>
                    </div>

                    @elseif($service === 'Hotel a Aeropuerto')
                    <div class="row form-section mb-4 shadow-sm border">
                        <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                        <h5 class="title-arrival mb-0">Informacion de Salida</h5>
                            <div class="col-sm-6 col-md-6 mb-1">
                                <label for="arrival" class="form-label">Aerolinea de Salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-plane"><i
                                            class="fas fa-plane input__icon"></i></span>
                                    <input type="text" class="form-control" id="arrival" aria-describedby="icon-plane">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="flight-number" class="form-label">Numero de vuelo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hashtag"><i
                                            class="fas fa-hashtag input__icon"></i></span>
                                    <input type="text" class="form-control" id="flight-number"
                                        aria-describedby="icon-hashtag">
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-passenger"><i
                                            class="fas fa-user input__icon"></i></span>
                                    <input readonly type="text" class="form-control" id="passenger_arrival" aria-describedby="icon-passenger">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="date" class="form-label">Fecha de salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-date"><i
                                            class="fas fa-calendar-alt input__icon"></i></span>
                                    <input type="date" class="form-control" id="date" aria-describedby="icon-date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 mb-4">
                                <label for="hour" class="form-label">Hora de salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hour"><i
                                            class="fas fa-clock input__icon"></i></span>
                                    <input type="text" class="form-control" id="hour" aria-describedby="icon-hour">
                                </div>
                            </div>
                    </div>

                    @elseif($service === 'Aeropuerto a Hotel a Aeropuerto')
                    <div class="row form-section mb-4 shadow-sm border">
                        <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                            <h5 class="title-arrival mb-0">Informacion de llegada</h5>
                            <div class="col-sm-6 col-md-6 mb-1">
                                <label for="arrival" class="form-label">Aerolinea de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-plane"><i
                                            class="fas fa-plane input__icon"></i></span>
                                    <input type="text" class="form-control" id="arrival" aria-describedby="icon-plane">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="flight-number" class="form-label">Numero de vuelo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hashtag"><i
                                            class="fas fa-hashtag input__icon"></i></span>
                                    <input type="text" class="form-control" id="flight-number"
                                        aria-describedby="icon-hashtag">
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-passenger"><i
                                            class="fas fa-user input__icon"></i></span>
                                    <input readonly type="text" class="form-control" id="passenger_arrival" aria-describedby="icon-passenger">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="date" class="form-label">Fecha de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-date"><i
                                            class="fas fa-calendar-alt input__icon"></i></span>
                                    <input type="date" class="form-control" id="date" aria-describedby="icon-date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 mb-4">
                                <label for="hour" class="form-label">Hora de llegada</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hour"><i
                                            class="fas fa-clock input__icon"></i></span>
                                    <input type="text" class="form-control" id="hour" aria-describedby="icon-hour">
                                </div>
                            </div>

                            <h5 class="title-arrival mb-0">Informacion de salida</h5>
                            <div class="col-sm-6 col-md-6 mb-1">
                                <label for="arrival" class="form-label">Aerolinea de salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-plane"><i
                                            class="fas fa-plane input__icon"></i></span>
                                    <input type="text" class="form-control" id="arrival" aria-describedby="icon-plane">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="flight-number" class="form-label">Numero de vuelo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hashtag"><i
                                            class="fas fa-hashtag input__icon"></i></span>
                                    <input type="text" class="form-control" id="flight-number"
                                        aria-describedby="icon-hashtag">
                                </div>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-passenger"><i
                                            class="fas fa-user input__icon"></i></span>
                                    <input readonly type="text" class="form-control" id="passenger_departure" aria-describedby="icon-passenger">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="date" class="form-label">Fecha de salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-date"><i
                                            class="fas fa-calendar-alt input__icon"></i></span>
                                    <input type="date" class="form-control" id="date" aria-describedby="icon-date">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 mb-4">
                                <label for="hour" class="form-label">Hora de salida</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="icon-hour"><i
                                            class="fas fa-clock input__icon"></i></span>
                                    <input type="text" class="form-control" id="hour" aria-describedby="icon-hour">
                                </div>
                            </div>
                    </div>

                    @endif
                    <!-- travel information end -->




                    <!-- Special request start -->
                    {{-- <div class="row form-section mb-4 shadow-sm border">
                        <h5 class="mt-2"><small class="number__section">03</small> Solicitud especial e instrucciones
                        </h5>
                        <div class="col-md-6">
                            <label for="special-seat" class="form-label">Asiento para niño</label>
                            <div class="input-group">
                                <label for="icon-baby" class="input-group-text"><i
                                        class="fas fa-baby input__icon"></i></label>
                                <select id="special-seat" class="form-select">
                                    <option selected disabled>Elige una opcion...</option>
                                    <option>No</option>
                                    <option>Si</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="extra" class="form-label">Equipo voluminoso</label>
                            <div class="input-group">
                                <label for="icon-extra" class="input-group-text"><i
                                        class="fas fa-suitcase input__icon"></i></label>
                                <select id="extra" class="form-select">
                                    <option selected disabled>Elige una opcion...</option>
                                    <option>No</option>
                                    <option>Si</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="instructions" class="form-label">Instrucciones especiales</label>
                            <textarea class="form-control" id="instructions" rows="3"></textarea>
                        </div>
                    </div> --}}
                    <!-- special request end -->

                    <!-- section total start -->
                    <div class="row form-section d-flex align-items-center shadow-sm border mb-4 total">
                        <h6 class="col">Total a pagar</h6>
                        <h5 class="col text-end price">${{ $price }} MXN</h5>
                    </div>
                    <!-- section total end -->

                    <div class="row mb-4">
                        <button class="btn btn-success" type="button">Continuar</button>
                        <p class="terms mt-2">Al hacer clic en el boton estas aceptando los <a href="#">terminos y condiciones</a>.</p>
                    </div>

                </form>
            </div>
            <!-- section left end --> 

            <!-- section right start  -->
            <div class="col-md-12 col-lg-4 mt-4">
                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-11 mb-4 shadow-sm border reservation__summary">
                        <h5 class="title__reservation mt-2">Resumen de reservacion</h5>
                        <p class="title mb-0">Tipo de servicio</p>
                        <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $service }}</p>
                        <p class="title mb-0">Desde</p>
                        <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $origen }}
                        </p>
                        <p class="title mb-0">Hacia</p>
                        <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $destino }}
                        </p>
                        <p class="title mb-0">Fecha</p>
                        <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date }}</p>
                        <p class="title mb-0">Hora</p>
                        <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $pickup }}</p>
                        <p class="title mb-0">Numero de pasajeros</p>
                        <p class="description"><i class="fas fa-users icon-resume"></i> {{ $passengers }}</p>
                        @if ($retorno == 'si')
                        <p class="title mb-0">Fecha de regreso</p>
                        <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date_comeback }}</p>
                        <p class="title mb-0">Hora de regreso</p>   
                        <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $time_comeback }}</p>                             
                        @endif
                        <p class="title mb-0">Servicio</p>
                        <p class="description"><i class="fas fa-shuttle-van icon-resume"></i> Suburban Redondo</p>
                    </div>

                    <div class="col-md-12 col-lg-11 mb-4 shadow-sm border widget">
                        <h5 class="title__widget mt-2">¿Necesitas ayuda con tu reservacion?</h5>
                        <p>Estariamos mas que felices de ayudarte. Nuestro call center esta a su servicio.</p>
                        <hr>
                        <p class="text-phone">Contactanos: +52 (998) 387 02 29</p>
                    </div>

                    <div class="col-md-12 col-lg-11 mb-4 shadow-sm border widget">
                        <h5 class="title__widget mt-2">¿Que incluye mi reservacion?</h5>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Recibimiento en el aeropuerto</p>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Aire acondicionado</p>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Seguro de pasajero</p>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Monitoreo de vuelo</p>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Servicio de transporte 24 hrs.</p>
                        <p class="widget mb-0"><i class="fas fa-check"></i> Conductor profesional bilingue</p>
                        <p class="widget mb-4"><i class="fas fa-check"></i> No hay tarifas por cambios de vuelo</p>
                    </div>
                </div>
            </div>

            <!-- section right end -->
        </div>
    </div>
    <!-- section content end  -->

    @include('layouts.components.new-footer')
    @include('layouts.components.script')
    </body>
</html>
