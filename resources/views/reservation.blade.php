<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.components.css')
</head>
    <body>
        <div id="app" class="super_container">
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
            </div>
            @include('layouts.components.footer')
        </div>
        @include('layouts.components.script')
    </body>
</html>
