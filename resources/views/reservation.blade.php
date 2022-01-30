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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
        <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">

    {{-- Mis estilos  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        @include('layouts.components.new-header')

        <!-- section content start -->
        <div  class="container">
            <div class="row">
                {{-- section left start --}}
                <div class="col-lg-8 mt-4 ">

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>
                        </div>
                    </div>

                    <input type="hidden" id="type_service" value="{{ $booking['service']  }}">
                    <input type="hidden" class="tarifas" value="{{ $tariff[0]->MXN }}">
                    <input type="hidden" class="tarifas" value="{{ $tariff[1]->MXN }}">
                    <input type="hidden" class="tarifas" value="{{ $tariff[2]->MXN }}">
                    <input type="hidden" class="tarifas" value="{{ $tariff[3]->MXN }}">

                    <!-- service-suburban start  -->
                    <div class="row">
                        <div class="col mb-4 service-list">
                            <div class="row mb-4">
                                <!-- section left -->
                                <div class="col-md-3 left">
                                    <h4 class="mt-2 title-service">{{ __('transporte') }} {{ $tariff[0]->type_unit->type_units }}</h4>
                                    <img class="service-img" src="{{ asset('assets/images/transport-suburban-min.png') }}" alt="transport-suburban">
                                    <ul>
                                        <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 6 pax.</li>
                                        <li class="specifications"> <i class="fas fa-suitcase icons-specifications icon-second"></i>  Max. 6 {{ __('maletas') }}</li>
                                        <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> {{ __('precio_vehiculo') }}</li>
                                    </ul>
                                    <ul class="buttons">
                                        <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> {{ __('impuestos') }}</li>
                                        <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> {{ __('seguro') }}</li>
                                    </ul>
                                </div>

                                <!-- section right -->
                                <div class="col-md-9 right">
                                <ul class="table-row mb-0">
                                    <li></li>
                                    {{-- <li class="text-center mt-2 title-eco sub_sen">{{ $tariff[0]->type_trip->type_trip }}</li> --}}
                                    {{-- <li class="text-center mt-2 title-pre sub_red">{{ $tariff[1]->type_trip->type_trip }}</li> --}}
                                    <li class="text-center mt-2 title-eco sub_sen">{{ __('sencillo') }}</li>
                                    <li class="text-center mt-2 title-pre sub_red">{{ __('redondo') }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_uno') }}</li>
                                    <li class="text-center sub_sen">{{ __('tiempo_espera') }}</li>
                                    <li class="text-center sub_red">{{ __('tiempo_espera') }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_dos') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-check"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_tres') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_cuatro') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_cinco') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_seis') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-check"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-4">{{ __('serv_txt_siete') }}</li>
                                    <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center price-eco sub_sen"><p class="prices"></p></li>
                                    <li class="text-center price-pre sub_red"><p class="prices"></p></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="sub_sen">
                                        <form id="sub_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[0]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[0]->type_trip->id }}">
                                            {{-- <input type="hidden" name="price" value="{{ $tariff[0]->MXN }}"> --}}
                                            <input type="hidden"  name="price" class="prices_inputs" value="">
                                            <input type="hidden"  name="price_mx" class="prices_inputs_mx" value="">
                                            <input type="hidden"  name="divisa" class="divisas_inputs" value="">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-eco">{{ __('Reserva ahora') }}</button>
                                        </form>
                                    </li>
                                    <li class="sub_red">
                                        <form id="sub_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[1]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[1]->type_trip->id }}">
                                            <input type="hidden"  name="price" class="prices_inputs" value="">
                                            <input type="hidden"  name="price_mx" class="prices_inputs_mx" value="">
                                            <input type="hidden"  name="divisa" class="divisas_inputs" value="">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-pre">{{ __('Reserva ahora') }}</button>
                                        </form>
                                    </li>
                                </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- service-suburban end -->

                    <!-- service-van start  -->
                    <div class="row">
                        <div class="col mb-4 service-list">
                            <div class="row mb-4">
                                <!-- section left -->
                                <div class="col-md-3 left">
                                    <h4 class="mt-2 title-service">{{ __('transporte') }} {{ $tariff[2]->type_unit->type_units }}</h4>
                                    <img class="service-img" src="{{ asset('assets/images/transport-van2.png') }}" alt="transport-van">
                                    <ul>
                                        <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 7 pax.</li>
                                        <li class="specifications"><i class="fas fa-suitcase icons-specifications icon-second"></i> Max. 10 {{ __('maletas') }}</li>
                                        <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> {{ __('precio_vehiculo') }}</li>
                                    </ul>
                                    <ul class="buttons">
                                        <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> {{ __('impuestos') }}</li>
                                        <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> {{ __('seguro') }}</li>
                                    </ul>
                                </div>

                                <!-- section right -->
                                <div class="col-md-9 right">
                                <ul class="table-row mb-0">
                                    <li></li>
                                    {{-- <li class="text-center mt-2 title-eco van_sen">{{ $tariff[2]->type_trip->type_trip }}</li> --}}
                                    {{-- <li class="text-center mt-2 title-pre van_red">{{ $tariff[3]->type_trip->type_trip }}</li> --}}
                                    <li class="text-center mt-2 title-eco van_sen">{{ __('sencillo') }}</li>
                                    <li class="text-center mt-2 title-pre van_red">{{ __('redondo') }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_uno') }}</li>
                                    <li class="text-center van_sen">{{ __('tiempo_espera') }}</li>
                                    <li class="text-center van_red">{{ __('tiempo_espera') }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_dos') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-check"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_tres') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_cuatro') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_cinco') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">{{ __('serv_txt_seis') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-check"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-4">{{ __('serv_txt_siete') }}</li>
                                    <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                                    <li class="text-center van_red"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center price-eco van_sen"><p class="prices"></p></li>
                                    <li class="text-center price-pre van_red"><p class="prices"></p></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="van_sen">
                                        <form id="van_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[2]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[2]->type_trip->id }}">
                                            <input type="hidden"  name="price" class="prices_inputs" value="">
                                            <input type="hidden"  name="price_mx" class="prices_inputs_mx" value="">
                                            <input type="hidden"  name="divisa" class="divisas_inputs" value="">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-eco">{{ __('Reserva ahora') }}</button>
                                        </form>
                                    </li>
                                    <li class="van_red">
                                        <form id="van_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[3]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[3]->type_trip->id }}">
                                            <input type="hidden"  name="price" class="prices_inputs" value="">
                                            <input type="hidden"  name="price_mx" class="prices_inputs_mx" value="">
                                            <input type="hidden"  name="divisa" class="divisas_inputs" value="">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-pre">{{ __('Reserva ahora') }}</button>
                                        </form>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- service-van end -->
                </div>
                <!-- section left end  -->


                <!-- section right start  -->
                <div class="col-md-12 col-lg-4 mt-4">
                    <div class="row justify-content-end">
                        <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                            <h5 class="title__reservation mt-2">{{ __('resumen') }}</h5>
                            <p class="title mb-0">{{ __('tipo_servicio') }}</p>
                            <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $booking['service'] }}</p>
                            <p class="title mb-0">{{ __('desde') }}</p>
                            <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['origen'] }}
                            </p>
                            <p class="title mb-0">{{ __('hacia') }}</p>
                            <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['destino'] }}
                            </p>
                            <p class="title mb-0">{{ __('fecha') }}</p>
                            <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date'] }}</p>
                            <p class="title mb-0">{{ __('hora') }}</p>
                            <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['pickup'] }}</p>
                            <p class="title mb-0">{{ __('num_pasajeros') }}</p>
                            <p class="description"><i class="fas fa-users icon-resume"></i> {{ $booking['passengers'] }}</p>
                            @if ($booking['retorno'] == 'si')
                            <p class="title mb-0">{{ __('fecha_regreso') }}</p>
                            <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date_comeback'] }}</p>
                            <p class="title mb-0">{{ __('hora_regreso') }}</p>
                            <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['time_comeback'] }}</p>
                            @endif
                        </div>

                        <div class="col-md-12 col-lg-11 mb-4 widget">
                            <h5 class="title__widget mt-2">{{ __('widget_uno') }}</h5>
                            <p>{{ __('widget_text') }}</p>
                            <hr>
                            <p class="text-phone">{{ __('widget_cont') }}: +52 (938) 172 6488</p>
                        </div>

                        <div class="col-md-12 col-lg-11 mb-4 widget">
                            <h5 class="title__widget mt-2">{{ __('widget_dos') }}</h5>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_uno') }}</p>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_dos') }}</p>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_tres') }}</p>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cuatro') }}</p>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cinco') }}</p>
                            <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_seis') }}</p>
                            <p class="mb-4"><i class="fas fa-check"></i> {{ __('wdos_txt_siete') }}</p>
                        </div>
                    </div>
                </div>
                <!-- section right end -->

            </div>
        </div>
        <!-- section content end -->
        <a href="https://wa.me/5219381726488?text=Me%20gustaría%20informacion%20acerca%20de%20los%20servicios" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </body>
</html>
