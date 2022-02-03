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
                            <h1 class="title-tour">coba - 3 cenotes</h1>
                        </div>

                        <div class="description">
                            <p>{{__('tours.Coba primera descripcion')}} </p>
                            <p>{{__('tours.Coba segunda descripcion')}} </p>
                            <p><span>Cenote Xibalbá</span>  {{__('tours.Coba tercera descripcion p_3.1')}}  <span>Cenote Los Aluxes</span>  {{__('tours.Coba tercera descripcion p_3.2')}} <span>Cenote Nohoch</span> {{__('tours.Coba tercera descripcion p_3.3')}} </p>
                        </div>

                        <a href="{{url(app()->getLocale().'/booking/tours'.'/6/purchase')}}" class="btn mb-4">{{__('Reserva ahora')}}</a>
                    </div>

                    <div class="col-lg-6">
                        <figure>
                            <img src="{{ asset('assets/images/tours/coba/coba_1.jpg') }}" alt="coba1" id="mainImg">
                        </figure>
                        <div class="thumb_img_list">
                            <ul>
                                <li><img src="{{ asset('assets/images/tours/coba/coba_1.jpg') }}" alt="coba1" id="thumb1"></li>
                                <li><img src="{{ asset('assets/images/tours/coba/coba_2.jpg') }}" alt="coba2" id="thumb2"></li>
                                <li><img src="{{ asset('assets/images/tours/coba/coba_3.jpeg') }}" alt="coba3" id="thumb3"></li>
                                <li><img src="{{ asset('assets/images/tours/coba/coba_4.JPG') }}" alt="coba4" id="thumb4"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-7">
                        <div class="details-title">
                            <h2 class="text-center">{{__('tours.¿Que incluye el tour?')}}</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/pickup.svg') }}" alt="pickup-icon" class="details-icon">
                                <p>Traslado de hotel a zona arqueologica de Coba - 2 horas de camino.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/pyramids.svg') }}" alt="pyramids-icon" class="details-icon">
                                <p>Estancia en el sitio arqueologico con visita guiada en el idioma natal del cliente - 3 horas.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/drink-bottle.svg') }}" alt="drink-bottle-icon" class="details-icon">
                                <p>Todos nuestros servicios incluyen: agua sin gas, refresco de cola con o sin azucar, cerveza y botanas.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/map.svg') }}" alt="map-icon" class="details-icon">
                                <p>Visita a los cenotes Xibalbá, Los Aluxes y Nohoch - Estancia 2 horas.</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="text-center">{{__('tours.Recomendaciones')}}</h2>
                                <p>Te recomendamos traer tu traje de baño y un cambio de ropa, para que puedas viajar seco y cómodo para las siguientes actividades, así como un bloqueador y repelente de insectos, de preferencia biodegradables. Tiempo libre para comer - 1 hora.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-center">{{ __('tours.Ubicacion')}}</h2>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.365816845341!2d-87.7348665850763!3d20.49122478629198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f51cf546e480153%3A0xc67bf794d06103de!2sZona%20arqueol%C3%B3gica%20de%20Coba!5e0!3m2!1ses!2smx!4v1642625017514!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>


        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>
</body>

</html>
