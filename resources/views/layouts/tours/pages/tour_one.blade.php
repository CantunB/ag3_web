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

                        <div class="title">
                            <h1 class="title-tour">Chichen Itza</h1>
                            {{-- <a href="#">Reserva ahora</a> --}}
                        </div>

                        <div class="description">
                            <p>(Chi-ch’en Itzá) significa al borde del pozo de los Itzáes. Chichén Itzá fue una de las ciudades-estado más importantes de la América prehispánica y es uno de los sitios arqueológicos más visitados de México en la actualidad.</p>
                            <p>Chichén Itzá es hermoso y magnífico tal como ya habrás escuchado y tiene muchas ruinas mayas para visitar y conocer su historia.</p>
                            <p>Chichén Itzá se divide en Chichén Antiguo y Chichén Itzá, donde puedes encontrar 6 Ruinas Mayas en la sección de Chichén Antiguo y unas 20 Ruinas Mayas en el Nuevo Chichén o Chichén Itzá, lo que hace un total de 26 Ruinas Mayas para ver en el Sitio Maya.</p>
                        </div>

                        <a href="{{url(app()->getLocale().'/booking/tours'.'/1/purchase')}}" class="btn mb-4">Reserva ahora</a>
                    </div>

                    <div class="col-lg-6">
                        <figure>
                            <img src="{{ asset('assets/images/tours/chichen-itza/picture1.jpg') }}" alt="picture1" id="mainImg">
                        </figure>
                        <div class="thumb_img_list">
                            <ul>
                                <li><img src="{{ asset('assets/images/tours/chichen-itza/picture1.jpg') }}" alt="picture1" id="thumb1"></li>
                                <li><img src="{{ asset('assets/images/tours/chichen-itza/picture2.jpg') }}" alt="picture2" id="thumb2"></li>
                                <li><img src="{{ asset('assets/images/tours/chichen-itza/picture3.jpg') }}" alt="picture3" id="thumb3"></li>
                                <li><img src="{{ asset('assets/images/tours/chichen-itza/picture4.jpg') }}" alt="picture4" id="thumb4"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-7">
                        <div class="details-title">
                            <h2 class="text-center">¿Que incluye el tour?</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/icons/pickup.svg') }}" alt="pickup-icon" class="details-icon">
                                <p>Traslado de hotel a Chichen Itza - 3 horas de camino.</p>
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
                                <p>Visita opcional sin cargo extra a la ciudad de Valladolid pueblo mágico - Estancia 1 hora.</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="text-center">Recomendaciones</h2>
                                <p>Te recomendamos traer tu traje de baño y un cambio de ropa, para que puedas viajar seco y cómodo para las siguientes actividades, así como un bloqueador y repelente de insectos, de preferencia biodegradables. Tiempo libre para comer - 1 hora.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-center">Ubicacion</h2>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.7736294932242!2d-88.57066558594205!3d20.678786655011294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5138b9a098f833%3A0xf70a67530750d45!2zQ2hpY2jDqW4gSXR6w6EsIFl1Yy4!5e0!3m2!1ses-419!2smx!4v1642194530515!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>


        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>
</body>

</html>
