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
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Mis estilos --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Select2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/personal_parsley.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gotop.css') }}">
</head>

<body>
    @include('layouts.components.new-header')
    <!-- section steps start -->
    <div class="container">

        {{-- boton de ir arriba  --}}
        <div class="go-top-container">
            <div class="go-top-button">
                <i class="fas fa-chevron-up"></i>
            </div>
        </div>

        <div class="mt-3 steps">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link disabled" id="unit-tab" data-bs-toggle="tab" data-bs-target="#unit"
                        type="button" role="tab" aria-controls="home" aria-selected="false">Seleccionar
                        traslado</button>
                </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="complete-tab" data-bs-toggle="tab" data-bs-target="#complete"
                        type="button" role="tab" aria-controls="profile" aria-selected="true"> {{__('completar_info')}} </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link disabled" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">{{__('forma de pago')}}</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabConteant">
        {{-- <div class="tab-pane fade" id="unit" role="tabpanel" aria-labelledby="home-tab">
            <div class="container" style="height: 50vh">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit odit, sunt nam cumque quis alias dolor harum, distinctio impedit repellendus voluptatum doloribus veniam facere aliquid dolore et, quas quo tempora?
            </div>
        </div> --}}
        <div class="tab-pane fade show active" id="complete" role="tabpanel" aria-labelledby="profile-tab">
            @include('layouts.booking_tabs.information')
        </div>
        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="contact-tab">
            @include('layouts.booking_tabs.payment')
        </div>
    </div>
    <!-- section content end  -->
    <a href="https://wa.me/5219381726488?text=Me%20gustaría%20informacion%20acerca%20de%20los%20servicios" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="{{ asset('assets/js/scripts/gotop.js') }}"></script>
    @include('layouts.components.new-footer')
    @include('layouts.components.scripts')
</body>

</html>
