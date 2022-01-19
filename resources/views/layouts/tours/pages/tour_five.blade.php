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
    {{-- <style>

          .btn_tour {
            min-width: 100px;
            min-height: 30px;
            font-family: 'Nunito', sans-serif;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.3px;
            font-weight: 650;
            color: #313133;
            background: #EEB313;
            background: linear-gradient(90deg, rgb(245, 203, 65) 0%, rgb(235, 187, 31) 100%);
            border: none;
            border-radius: 1200px;
            transition: all 0.5s ease-in-out 0s;
            cursor: pointer;
            outline: none;
            position: relative;
            padding: 10px;
            }

          button::before {
          content: '';
            border-radius: 1000px;
            min-width: calc(300px + 12px);
            min-height: calc(60px + 12px);
            border: 6px solid #FFBB00;
            box-shadow: 0 0 60px rgba(255, 217, 0, 0.795);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: all .5s ease-in-out 0s;
          }

          .btn_tour:hover, .btn_tour:focus {
            color: #313133;
            transform: translateY(-6px);
          }

          button:hover::before, button:focus::before {
            opacity: 1;
          }

          button::after {
            content: '';
            width: 30px; height: 30px;
            border-radius: 100%;
            border: 6px solid #FFBB00;
            position: absolute;
            z-index: -1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: ring 1.5s infinite;
          }

          button:hover::after, button:focus::after {
            animation: none;
            display: none;
          }

          @keyframes ring {
            0% {
              width: 30px;
              height: 30px;
              opacity: 1;
            }
            100% {
              width: 300px;
              height: 300px;
              opacity: 0;
            }
          }
    </style> --}}
</head>

<body>
    <div id="app" class="super_container">
        @include('layouts.components.new-header')

        <section class="section my-4 tours-show">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="title">
                            <h1 class="title-tour">ek balam - Las coloradas</h1>
                        </div>

                        <div class="description">
                            <p>Ek Balam es un nombre en lengua maya yucateca, formado por los vocablos ek’, con el que se denomina al color negro y que también significa “lucero” o “estrella”; y balam, que quiere decir “jaguar”. Puede traducirse entonces como “jaguar-oscuro-o negro”. Sin embargo, algunos hablantes de maya en la región también lo traducen como “lucero-jaguar”.</p>
                            <p>Las Coloradas es un pequeño puerto pesquero ubicado en un estero en el litoral norte de la Península de Yucatán. No puedes perderte de las montañas de sal y su imponente color blanco que de seguro desearás fotografiar.</p>
                            <p>Las Coloradas también es un excelente sitio para el avistamiento de flamencos, los cuales puedes observar entre los meses de abril,mayo y junio.</p>
                        </div>

                        <a href="{{url(app()->getLocale().'/booking/tours'.'/5/purchase')}}" class="btn_tour btn mb-4">Reserva ahora</a>
                    </div>

                    <div class="col-lg-6">
                        <figure>
                            <img src="{{ asset('assets/images/tours/ek-balam/ekbalam_1.jpg') }}" alt="ekbalam1" id="mainImg">
                        </figure>
                        <div class="thumb_img_list">
                            <ul>
                                <li><img src="{{ asset('assets/images/tours/ek-balam/ekbalam_1.jpg') }}" alt="ekbalam1" id="thumb1"></li>
                                <li><img src="{{ asset('assets/images/tours/ek-balam/ekbalam_2.png') }}" alt="ekbalam2" id="thumb2"></li>
                                <li><img src="{{ asset('assets/images/tours/ek-balam/ekbalam_3.jpg') }}" alt="ekbalam3" id="thumb3"></li>
                                <li><img src="{{ asset('assets/images/tours/ek-balam/ekbalam_4.jpg') }}" alt="ekbalam4" id="thumb4"></li>
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
                                <p>Traslado de hotel a la zona arqueologica de Ek Balam - 3 horas de camino.</p>
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
                                <p>Visita al pueblo pesquero de las coloradas - Estancia 1 hora.</p>
                            </div>
                            <div class="col-md-12">
                                <h2 class="text-center">Recomendaciones</h2>
                                <p>Ten a la mano un buen bloqueador solar, de preferencia que sea biodegradable. Las aguas color rosa no son para bañarse debido a la gran cantidad de cristales de sal que posee y puede dañar la piel. Además, las formaciones cristalinas que se forman a la orilla de éste tarde en formarse mucho tiempo, por lo que pisarlas producirá un daño a éste.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <h2 class="text-center">Ubicacion</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.4975351427356!2d-88.13812268506966!3d20.892293486072383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f519d2cfd290dcf%3A0x2c8918d639ce5df9!2sZona%20Arqueol%C3%B3gica%20de%20Ek%20Balam!5e0!3m2!1ses!2smx!4v1642621487315!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </section>


        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>
</body>

</html>
