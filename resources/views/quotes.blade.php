<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @include('layouts.components.css') --}}
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Mis estilos  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                        <button class="nav-link disabled" id="information-tab" data-bs-toggle="tab" data-bs-target="#information"
                            type="button" role="tab" aria-controls="information" aria-selected="true">Completar
                            informacion</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- INICIO DE LISTA DE TABS -->
        <div class="tab-content" id="myTabConteant">
            <div class="tab-pane fade show active" id="unit" role="tabpanel" aria-labelledby="unit-tab">
                <!-- Detalles de vehiculos start -->
                    @include('layouts.quotes_tabs.unit')
                <!-- Detalles de vehiculos end -->
            </div>
            <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                @include('layouts.quotes_tabs.information')
            </div>
        </div>
        <!-- TERMINO DE LISTA DE TABS -->

        @include('layouts.components.new-footer')
        @include('layouts.components.script')
    </body>
</html>
