<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @include('layouts.components.css') --}}

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Mis estilos  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        {{-- <div id="app" class="super_container">
            @include('layouts.components.header')
            <div class="home">
                <div class="home_slider_container">
                    <div class="owl-carousel owl-theme home_slider">
                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/chevrolet_suburban.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/cancun.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/home_slider.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="home_page_nav">
                        <ul class="d-flex flex-column align-items-end justify-content-end">
                            <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                            <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                            <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('layouts.components.searcher')

            <div  class="mt-5 container  shadow-lg rounded">
            <h4>Pequeña modificacion de prueba -- for your Arrival transportation to {{ $destino }} for {{ $passengers }} Passengers</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container">
                                <div style="height: 350px" class="mt-4 mb-4 col-md-12 shadow text-center">
                                    <h5 class="text-uppercase" style="color: blue">transport type {{ $tariff[0]->type_unit->type_units }} </h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                                    <img src="{{ asset('assets/images/icons/van.png') }}" alt="..." class="rounded " width="150px">

                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                                                    <ul class="col-xs-4 col-sm-6 col-md-12">
                                                        <li><p>Booking modification</p></li>
                                                        <li><p>Covid-19 Health Kit</p></li>
                                                        <li><p>Private service</p></li>
                                                        <li><p>Waiting time</p></li>
                                                        <li><p>TRAVEL INSURANCE</p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 350px" class="mt-4 mb-4 col-md-12 shadow text-center">
                                    <h5 class="text-uppercase" style="color: blue">transport type {{ $tariff[2]->type_unit->type_units }} </h5>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                                <img src="{{ asset('assets/images/icons/camioneta.png') }}" alt="..." class="rounded " width="150px">
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                                                <ul class="col-xs-4 col-sm-6 col-md-12">
                                                    <li><p>Booking modification</p></li>
                                                    <li><p>Covid-19 Health Kit</p></li>
                                                    <li><p>Private service</p></li>
                                                    <li><p>Waiting time</p></li>
                                                    <li><p>TRAVEL INSURANCE</p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="mt-4 col-md-12 ">
                                    <h5 class="text-uppercase text-center" style="color: blue">transport type {{ $tariff[0]->type_unit->type_units }} </h5>

                                    <div class="row border rounded">
                                        <div class="col-md-6">
                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded rounded mt-2 mb-2 p-1 border text-center">
                                                <h5 class="text-warning text-center">{{ $tariff[0]->type_trip->type_trip }}</h5>
                                                <form id="sub_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST" >
                                                    @csrf
                                                    <ul>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                        <li><p><i style="color: red" class="fas fa-times"></i> Private service</p></li>
                                                        <li><p><i style="color: red" class="fas fa-times"></i> Waiting time</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                    </ul>
                                                    <h4 class="p-1 text-center text-dark">${{ $tariff[0]->MXN }} MXN</h4>

                                                    <input type="hidden" class="form-control" name="unit" value="1">
                                                    <input type="hidden" class="form-control" name="service" value="{{ $service }}">
                                                    <input type="hidden" class="form-control" name="origen" value="{{ $origen }}">
                                                    <input type="hidden" class="form-control" name="destino" value="{{ $destino }}">
                                                    <input type="hidden" class="form-control" name="date" value="{{ $date }}">
                                                    <input type="hidden" class="form-control" name="pickup" value="{{ $pickup }}">
                                                    <input type="hidden" class="form-control" name="passengers" value="{{ $passengers }}">
                                                    <input type="hidden" class="form-control" name="type_unit" value="{{ $tariff[0]->type_unit->id }}">
                                                    <input type="hidden" class="form-control" name="type_trip" value="{{ $tariff[0]->type_trip->id }}">
                                                    <input type="hidden" class="form-control" name="price" value="{{ $tariff[0]->MXN }}">
                                                    @if ($retorno == 'si')
                                                    <input type="hidden" class="form-control" name="retorno" value="{{ $retorno }}">
                                                    <input type="hidden" class="form-control" name="date_comeback" value="{{ $date_comeback }}">
                                                    <input type="hidden" class="form-control" name="time_comeback" value="{{ $time_comeback }}">
                                                    @endif
                                                    <button type="submit" class="btn btn-primary">RESERVAR</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded mt-2 mb-2 p-1 border text-center">
                                                <h5 class="text-warning text-center">{{ $tariff[1]->type_trip->type_trip }}</h5>
                                                <form id="sub_redondo"  action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                                    @csrf
                                                    <ul>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Private service</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Waiting time</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                    </ul>
                                                    <h4 class="p1- text-center text-dark">${{ $tariff[1]->MXN }} MXN</h4>

                                                    <input type="hidden" class="form-control" name="unit" value="1">
                                                    <input type="hidden" class="form-control" name="service" value="{{ $service }}">
                                                    <input type="hidden" class="form-control" name="origen" value="{{ $origen }}">
                                                    <input type="hidden" class="form-control" name="destino" value="{{ $destino }}">
                                                    <input type="hidden" class="form-control" name="date" value="{{ $date }}">
                                                    <input type="hidden" class="form-control" name="pickup" value="{{ $pickup }}">
                                                    <input type="hidden" class="form-control" name="passengers" value="{{ $passengers }}">
                                                    <input type="hidden" class="form-control" name="type_unit" value="{{ $tariff[1]->type_unit->id }}">
                                                    <input type="hidden" class="form-control" name="type_trip" value="{{ $tariff[1]->type_trip->id }}">
                                                    <input type="hidden" class="form-control" name="price" value="{{ $tariff[1]->MXN }}">
                                                    @if ($retorno == 'si')
                                                    <input type="hidden" class="form-control" name="retorno" value="{{ $retorno }}">
                                                    <input type="hidden" class="form-control" name="date_comeback" value="{{ $date_comeback }}">
                                                    <input type="hidden" class="form-control" name="time_comeback" value="{{ $time_comeback }}">
                                                    @endif
                                                    <button type="submit" class="btn btn-success aling-center">RESERVAR</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-uppercase text-center text-primary">transport type {{ $tariff[2]->type_unit->type_units }} </h5>

                                    <div class="row border rounded">
                                        <div class="col-md-6 ">
                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded mt-2 mb-2 p-1 border text-center">
                                                <h5 class="text-warning text-center">{{ $tariff[2]->type_trip->type_trip }}</h5>
                                                <form id="van_sencillo"  action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                                    @csrf
                                                    <ul>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                        <li><p><i style="color: red" class="fas fa-times"></i> Private service</p></li>
                                                        <li><p><i style="color: red" class="fas fa-times"></i> Waiting time</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                    </ul>
                                                    <h4 class="p-1 text-center text-dark" >${{ $tariff[2]->MXN }} MXN</h4>

                                                    <input type="hidden" class="form-control" name="unit" value="2">
                                                    <input type="hidden" class="form-control" name="service" value="{{ $service }}">
                                                    <input type="hidden" class="form-control" name="origen" value="{{ $origen }}">
                                                    <input type="hidden" class="form-control" name="destino" value="{{ $destino }}">
                                                    <input type="hidden" class="form-control" name="date" value="{{ $date }}">
                                                    <input type="hidden" class="form-control" name="pickup" value="{{ $pickup }}">
                                                    <input type="hidden" class="form-control" name="passengers" value="{{ $passengers }}">
                                                    <input type="hidden" class="form-control" name="type_unit" value="{{ $tariff[2]->type_unit->id }}">
                                                    <input type="hidden" class="form-control" name="type_trip" value="{{ $tariff[2]->type_trip->id }}">
                                                    <input type="hidden" class="form-control" name="price" value="{{ $tariff[2]->MXN }}">
                                                    @if ($retorno == 'si')
                                                    <input type="hidden" class="form-control" name="retorno" value="{{ $retorno }}">
                                                    <input type="hidden" class="form-control" name="date_comeback" value="{{ $date_comeback }}">
                                                    <input type="hidden" class="form-control" name="time_comeback" value="{{ $time_comeback }}">
                                                    @endif
                                                    <button type="submit" class="btn btn-primary">RESERVAR</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class=" rounded mt-2 mb-2 p-1 border text-center">
                                                <h5 class="text-warning text-center">{{ $tariff[3]->type_trip->type_trip }}</h5>
                                                <form id="van_redondo"  action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                                    @csrf
                                                    <ul>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Private service</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Waiting time</p></li>
                                                        <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                    </ul>
                                                    <h4 class="p-1 text-center text-dark" >${{ $tariff[3]->MXN }} MXN</h4>

                                                    <input type="hidden" class="form-control" name="unit" value="2">
                                                    <input type="hidden" class="form-control" name="service" value="{{ $service }}">
                                                    <input type="hidden" class="form-control" name="origen" value="{{ $origen }}">
                                                    <input type="hidden" class="form-control" name="destino" value="{{ $destino }}">
                                                    <input type="hidden" class="form-control" name="date" value="{{ $date }}">
                                                    <input type="hidden" class="form-control" name="pickup" value="{{ $pickup }}">
                                                    <input type="hidden" class="form-control" name="passengers" value="{{ $passengers }}">
                                                    <input type="hidden" class="form-control" name="type_unit" value="{{ $tariff[3]->type_unit->id }}">
                                                    <input type="hidden" class="form-control" name="type_trip" value="{{ $tariff[3]->type_trip->id }}">
                                                    <input type="hidden" class="form-control" name="price" value="{{ $tariff[3]->MXN }}">

                                                    @if ($retorno == 'si')
                                                    <input type="hidden" class="form-control" name="retorno" value="{{ $retorno }}">
                                                    <input type="hidden" class="form-control" name="date_comeback" value="{{ $date_comeback }}">
                                                    <input type="hidden" class="form-control" name="time_comeback" value="{{ $time_comeback }}">
                                                    @endif
                                                    <button type="submit" class="btn btn-success">RESERVAR</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container">
                                <div class="row">
                                    <div style="background-color: rgba(142, 143, 155, 0.336) " class="mt-5 p-3 col-md-12 rounded">
                                        <h5 class="text-uppercase text-primary text-center">Booking Summary</h5>
                                        <label class="text-dark">Type of Service</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $service }}">
                                        <label class="text-dark">From</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $origen }}">
                                        <label class="text-dark">To</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $destino }}">
                                        <label class="text-dark">Date</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $date }}">
                                        <label class="text-dark">Time</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $pickup }}">
                                        <label class="text-dark">Number of Passengers</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $passengers }}">
                                        @if ($retorno == 'si')
                                        <label class="text-dark">Fecha de regreso</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $date_comeback }}">
                                        <label class="text-dark">Hora de regreso</label>
                                        <input readonly type="text" class="form-control" id="inputAddress" value="{{ $time_comeback }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-4 col-md-12 text-dark">
                                        <div style="border-style: dotted; border-color:rgb(0, 4, 255)" class="mt-4 p-3 rounded">
                                            <h5 class="text-primary">Need help with your booking?</h5>
                                            <p>We would be more than happy to help you. Our call center is at your service.</p>
                                            <hr>
                                            <strong>{{ __('contactanos') }}: </strong><span><strong>+52 (998) 387.0229</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div  class="mt-4 col-md-12 text-dark">

                                        <div style="border-style: dotted; border-color:rgb(0, 4, 255)" class="mt-4 p-3 rounded">
                                            <h5 class="">What include your booking?</h5>
                                            <ul>
                                                <li>Air Conditioning</li>
                                                <li>Travel Insurance</li>
                                                <li>Flight monitoring</li>
                                                <li>24 hrs transportation service</li>
                                                <li>Professional bilingual driver</li>
                                                <li>No fees for flight changes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                </div>
                <div class="row">

                    <div class="mt-4 col-md-4 border rounded">

                    </div>

                </div>


                <h1> ESTO ES UNA MODIIFICACION HECHA POR BERNA </h1>
            </div>
            @include('layouts.components.footer')
        </div> --}}

        @include('layouts.components.new-header')

        <!-- section content start -->
        <div class="container">
            <div class="row">
                {{-- section left start --}}
                <div class="col-lg-8 mt-4">
                    <h5 class="list">Lista de servicios disponibles para su transporte de llegada a {{ $booking['destino'] }} para {{ $booking['passengers'] }} pasajeros. </h5>
                    <input type="hidden" id="type_service" value="{{ $booking['service']  }}">
                    <!-- service-suburban start  -->
                    <div class="row">
                        <div class="col mb-4 service-list">
                            <div class="row mb-4">
                                <!-- section left -->
                                <div class="col-md-3 left">
                                    <h4 class="mt-2 title-service">TRANSPORTE {{ $tariff[0]->type_unit->type_units }}</h4>
                                    <img class="service-img" src="{{ asset('assets/images/transport-suburban.png') }}" alt="transport-suburban">
                                    <ul>
                                        <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 8 pax.</li>
                                        <li class="specifications"> <i class="fas fa-suitcase icons-specifications icon-second"></i>  Max. 7 maletas</li>
                                        <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> Precio por vehiculo</li>
                                    </ul>
                                    <ul class="buttons">
                                        <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> Impuestos incluidos</li>
                                        <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> Seguro de viaje</li>
                                    </ul>
                                </div>

                                <!-- section right -->
                                <div class="col-md-9 right">
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center mt-2 title-eco sub_sen">{{ $tariff[0]->type_trip->type_trip }}</li>
                                    <li class="text-center mt-2 title-pre sub_red">{{ $tariff[1]->type_trip->type_trip }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Tiempo de espera</li>
                                    <li class="text-center">Hasta 30 min.</li>
                                    <li class="text-center">Minimo</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Servicio privado</li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Cancelacion gratuita</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Cuponera de descuentos</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Amenidades de bienvenida</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Kit de salud Covid-19</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-4">Paradas de cortesia en tienda de conveniencia</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center price-eco">${{ $tariff[0]->MXN }} MXN</li>
                                    <li class="text-center price-pre">${{ $tariff[1]->MXN }} MXN</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li>
                                        <form id="sub_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="unit" value="1">
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[0]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[0]->type_trip->id }}">
                                            <input type="hidden" name="price" value="{{ $tariff[0]->MXN }}">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-eco">Reserva ahora</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form id="sub_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="unit" value="1">
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[1]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[1]->type_trip->id }}">
                                            <input type="hidden" name="price" value="{{ $tariff[1]->MXN }}">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-pre">Reserva ahora</button>
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
                                    <h4 class="mt-2 title-service">TRANSPORTE {{ $tariff[2]->type_unit->type_units }}</h4>
                                    <img class="service-img" src="{{ asset('assets/images/transport-van.png') }}" alt="transport-van">
                                    <ul>
                                        <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 8 pax.</li>
                                        <li class="specifications"><i class="fas fa-suitcase icons-specifications icon-second"></i> Max. 7 maletas</li>
                                        <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> Precio por vehiculo</li>
                                    </ul>
                                    <ul class="buttons">
                                        <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> Impuestos incluidos</li>
                                        <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> Seguro de viaje</li>
                                    </ul>
                                </div>

                                <!-- section right -->
                                <div class="col-md-9 right">
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center mt-2 title-eco">{{ $tariff[2]->type_trip->type_trip }}</li>
                                    <li class="text-center mt-2 title-pre">{{ $tariff[3]->type_trip->type_trip }}</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Tiempo de espera</li>
                                    <li class="text-center">Hasta 30 min.</li>
                                    <li class="text-center">Minimo</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Servicio privado</li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Cancelacion gratuita</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Cuponera de descuentos</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Amenidades de bienvenida</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-2">Kit de salud Covid-19</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li class="mb-4">Paradas de cortesia en tienda de conveniencia</li>
                                    <li class="text-center"><i class="fas fa-times"></i></li>
                                    <li class="text-center"><i class="fas fa-check"></i></li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li class="text-center price-eco">${{ $tariff[2]->MXN }} MXN</li>
                                    <li class="text-center price-pre">${{ $tariff[3]->MXN }} MXN</li>
                                </ul>
                                <ul class="table-row mb-0">
                                    <li></li>
                                    <li>
                                        <form id="van_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="unit" value="2">
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[2]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[2]->type_trip->id }}">
                                            <input type="hidden" name="price" value="{{ $tariff[2]->MXN }}">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-eco">Reserva ahora</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form id="van_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="unit" value="2">
                                            <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                            <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                            <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                            <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                            <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                            <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                            <input type="hidden" name="type_unit" value="{{ $tariff[3]->type_unit->id }}">
                                            <input type="hidden" name="type_trip" value="{{ $tariff[3]->type_trip->id }}">
                                            <input type="hidden" name="price" value="{{ $tariff[3]->MXN }}">
                                            @if ($booking['retorno'] == 'si')
                                            <input type="hidden" name="retorno" value="{{ $booking['retorno'] }}">
                                            <input type="hidden" name="date_comeback" value="{{ $booking['date_comeback'] }}">
                                            <input type="hidden" name="time_comeback" value="{{ $booking['time_comeback'] }}">
                                            @endif
                                            <button type="submit" class="button-pre">Reserva ahora</button>
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
                            <h5 class="title__reservation mt-2">Resumen de reservacion</h5>
                            <p class="title mb-0">Tipo de servicio</p>
                            <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $booking['service'] }}</p>
                            <p class="title mb-0">Desde</p>
                            <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['origen'] }}
                            </p>
                            <p class="title mb-0">Hacia</p>
                            <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['destino'] }}
                            </p>
                            <p class="title mb-0">Fecha</p>
                            <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date'] }}</p>
                            <p class="title mb-0">Hora</p>
                            <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['pickup'] }}</p>
                            <p class="title mb-0">Numero de pasajeros</p>
                            <p class="description"><i class="fas fa-users icon-resume"></i> {{ $booking['passengers'] }}</p>
                            @if ($booking['retorno'] == 'si')
                            <p class="title mb-0">Fecha de regreso</p>
                            <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date_comeback'] }}</p>
                            <p class="title mb-0">Hora de regreso</p>
                            <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['time_comeback'] }}</p>
                            @endif
                        </div>

                        <div class="col-md-12 col-lg-11 mb-4 widget">
                            <h5 class="title__widget mt-2">¿Necesitas ayuda con tu reservacion?</h5>
                            <p>Estariamos mas que felices de ayudarte. Nuestro call center esta a su servicio.</p>
                            <hr>
                            <p class="text-phone">Contactanos: +52 (998) 387 02 29</p>
                        </div>

                        <div class="col-md-12 col-lg-11 mb-4 widget">
                            <h5 class="title__widget mt-2">¿Que incluye mi reservacion?</h5>
                            <p class="mb-0"><i class="fas fa-check"></i> Recibimiento en el aeropuerto</p>
                            <p class="mb-0"><i class="fas fa-check"></i> Aire acondicionado</p>
                            <p class="mb-0"><i class="fas fa-check"></i> Seguro de pasajero</p>
                            <p class="mb-0"><i class="fas fa-check"></i> Monitoreo de vuelo</p>
                            <p class="mb-0"><i class="fas fa-check"></i> Servicio de transporte 24 hrs.</p>
                            <p class="mb-0"><i class="fas fa-check"></i> Conductor profesional bilingue</p>
                            <p class="mb-4"><i class="fas fa-check"></i> No hay tarifas por cambios de vuelo</p>
                        </div>
                    </div>
                </div>
                <!-- section right end -->

            </div>
        </div>
        <!-- section content end -->

        @include('layouts.components.new-footer')
        @include('layouts.components.script')
    </body>
</html>
