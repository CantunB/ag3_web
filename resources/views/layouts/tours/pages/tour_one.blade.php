<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
    <title> {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="AG3 Landing page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap v5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/my_styles/bootstrap.min.css') }}">
    <!-- font-awesome v4.7.0 -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <!-- Mis estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/tours-show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">

</head>

<body>
    <div id="app" class="super_container">
        @include('layouts.components.new-header')

        <section class="section my-4 tours-show">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>

                        <div class="title">
                            <h1 class="title-tour">laguna de siete colores - bacalar</h1>
                        </div>

                        <div class="description">
                            <p> {{__('tours.Bacalar primera descripcion')}} </p>
                            <p> {{__('tours.Bacalar segunda descripcion')}} </p>
                            <p> {{__('tours.Bacalar tercera descripcion')}} </p>
                        </div>

                        <a href="{{url(app()->getLocale().'/booking/tours'.'/1/purchase')}}" class="btn mb-4">{{__('Reserva ahora')}}</a>
                    </div>

                    <div class="col-lg-6">
                        <figure>
                            <img src="{{ asset('assets/images/tours/bacalar/bacalar_1.jpg') }}" alt="bacalar1" id="mainImg">
                        </figure>
                        <div class="thumb_img_list">
                            <ul>
                                <li><img src="{{ asset('assets/images/tours/bacalar/bacalar_1.jpg') }}" alt="bacalar1" id="thumb1"></li>
                                <li><img src="{{ asset('assets/images/tours/bacalar/bacalar_2-min.jpg') }}" alt="bacalar2" id="thumb2"></li>
                                <li><img src="{{ asset('assets/images/tours/bacalar/bacalar_3-min.jpg') }}" alt="bacalar3" id="thumb3"></li>
                                <li><img src="{{ asset('assets/images/tours/bacalar/bacalar_4.jpg') }}" alt="bacalar4" id="thumb4"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-7">
                        <div class="details-title">
                            <h2 class="text-center"> {{__('tours.¿Que incluye el tour?')}} </h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/pickup.svg') }}" alt="pickup-icon" class="details-icon">
                                <p>Traslado de hotel a bacalar - 5 horas de camino.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/swimming.svg') }}" alt="pyramids-icon" class="details-icon">
                                <p>Estancia en la laguna de siete colores con visita guiada en el idioma natal del cliente - 3 horas.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/drink-bottle.svg') }}" alt="drink-bottle-icon" class="details-icon">
                                <p>Todos nuestros servicios incluyen: agua sin gas, refresco de cola con o sin azucar, cerveza y botanas.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/map.svg') }}" alt="map-icon" class="details-icon">
                                <p>Visita opcional sin cargo extra al cenote azul - Estancia 1 hora.</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="text-center"> {{__('tours.Recomendaciones')}} </h2>
                                <p> {{__('Tours.Bacalar recomendaciones')}} </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-center"> {{ __('tours.Ubicacion')}} </h2>

                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.7736294932242!2d-88.57066558594205!3d20.678786655011294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5138b9a098f833%3A0xf70a67530750d45!2zQ2hpY2jDqW4gSXR6w6EsIFl1Yy4!5e0!3m2!1ses-419!2smx!4v1642194530515!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241899.60345025317!2d-88.53247028359372!3d18.6782919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5bb1ffe04a7cc9%3A0x4936cf3e5108df91!2sLaguna%20de%20los%207%20colores!5e0!3m2!1ses!2smx!4v1642612337191!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <a href="https://wa.me/5219381726488?text=Me%20gustaría%20informacion%20acerca%20de%20los%20servicios" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>
</body>

</html>
