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
        <div class="row mt-3 steps border shadow-sm" id="tabs">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <div class="col">
                        <div
                            class="step-one d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                            <p class="mb-0">01</p>
                        </div>
                    </div>
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">SELECCIONAR TRASLADO</a>
                </li>
                <li class="nav-item" role="presentation">
                    <div class="col">
                        <div
                            class="step-two d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center step-active">
                            <p class="mb-0">02</p>
                        </div>
                    </div>
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">COMPLETAR INFORMACION</a>
                </li>
                <li class="nav-item" role="presentation">
                    <div class="col">
                        <div
                            class="step-two d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                            <p class="mb-0">03</p>
                        </div>
                    </div>
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">FINALIZAR RESERVA</a>
                </li>
            </ul>

            {{-- <div class="col">
                <div
                    class="step-four d-flex flex-column align-items-center justify-content-sm-start justify-content-md-center">
                    <p class="mb-0">04</p>
                    <p class="text-center mb-2">Completa tu reservacion</p>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="tab-content" id="myTabConteant">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit odit, sunt nam cumque quis alias dolor harum, distinctio impedit repellendus voluptatum doloribus veniam facere aliquid dolore et, quas quo tempora?
            </div>
        </div>
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @include('layouts.booking_tabs.information')
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            @include('layouts.booking_tabs.payment')
        </div>
    </div>

    <!-- section content end  -->

    @include('layouts.components.new-footer')
    @include('layouts.components.script')
    </body>
</html>
