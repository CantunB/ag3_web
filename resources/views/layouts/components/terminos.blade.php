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

    <link rel="stylesheet" href="{{ asset('css/terms.css') }}">
</head>

<body>
    <div id="app" class="super_container">

        @include('layouts.components.new-header')

        <section class="section my-4 terms">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{ __('regresar') }}</a>
                    </div>
                </div>

                <h1 class="text-center mb-2">{{ __('booking.titulo_terminos') }}</h1>

                <h2>{{ __('booking.politicas_reserva') }}</h2>
                <p>{{ __('booking.descripcion_politicas_reserva') }}</p>

                <h2>{{ __('booking.politicas_pago') }}</h2>
                <p>{{ __('booking.descripcion_politicas_pago') }}</p>

                <h2>{{ __('booking.renuncia_resp') }}</h2>
                <p>{{ __('booking.descripcion_renuncia_resp') }}</p>

                <h2>{{ __('booking.politica_cancelacion') }}</h2>
                <p>{{ __('booking.cancelacion_txt_uno') }}</p>
                <ol>
                    <li>{{ __('booking.cancelacion_opcion_uno') }}</li>
                    <li>{{ __('booking.cancelacion_opcion_dos') }}</li>
                    <li>{{ __('booking.cancelacion_opcion_tres') }}</li>
                    <li>{{ __('booking.cancelacion_opcion_cuatro') }}</li>
                    <li>{{ __('booking.cancelacion_opcion_cinco') }}</li>
                    <li>{{ __('booking.cancelacion_opcion_seis') }}</li>
                </ol>

                <p>{{ __('booking.cancelacion_txt_dos') }}</p>
            </div>
        </section>

        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>

</body>

</html>
