<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title>AG3 Servicio de transportacion SUV´S - VAN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="stigmacode.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('layouts.components.styles')

    <!-- Bootstrap v5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/my_styles/bootstrap.min.css') }}">
    <!-- font-awesome v4.7.0 -->
   <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <!-- Mis estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/personal_parsley.css') }}">
    {{--------------------------------Global site tag (gtag.js) - Google Analytics--------------------------------------------}}

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-578QPHP39F"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-578QPHP39F');
        </script>

</head>
    <body>
        <div id="app" class="super_container">

            <div class="new-home">
                @include('layouts.components.new-home')
            </div>

            {{-- Boton de ir arriba --}}
            <div class="go-top-container">
                <div class="go-top-button">
                    <i class="fas fa-chevron-up"></i>
                </div>
            </div>

            @include('layouts.components.tours')

            @include('layouts.components.services')

            @include('layouts.components.gallery')

            @include('layouts.components.testimonials')

            @include('new-contact')

            @include('layouts.components.about')

            <a href="https://wa.me/5219381726488?text=Me%20gustaría%20informacion%20acerca%20de%20los%20servicios" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

            @include('layouts.components.new-footer')
            @include('layouts.components.scripts')
        </div>
    </body>
</html>
