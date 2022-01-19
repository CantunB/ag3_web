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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/spiner.css') }}">

</head>
    <body>
        @include('layouts.components.new-header')
        <div class="container">
            <div class="mt-3 steps">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="unit-tab" data-bs-toggle="tab" data-bs-target="#unit"
                            type="button" role="tab" aria-controls="unit" aria-selected="false">Seleccionar
                            traslado</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information"
                            type="button" role="tab" aria-controls="information" aria-selected="true">Completar
                            informacion</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link disabled" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Forma de pago</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- INICIO DE LISTA DE TABS -->
        <div class="tab-content" id="myTabConteant">
            <div class="tab-pane fade show active" id="unit" role="tabpanel" aria-labelledby="unit-tab">
                <!-- Detalles de vehiculos start -->
                    @include('layouts.tours_tabs.unit')
                <!-- Detalles de vehiculos end -->
            </div>
            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                @include('layouts.tours_tabs.information')
            </div>
            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                @include('layouts.booking_tabs.payment')
            </div>
        </div>
        <!-- TERMINO DE LISTA DE TABS -->
        <a href="https://wa.me/5219381726488?text=Me%20gustaría%20informacion%20acerca%20de%20los%20servicios" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')

    </body>
</html>
