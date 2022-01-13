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
    <style>

/* skin 5 */

.num-block.skin-5 {
}

.skin-5 .num-in {
  width: 88px;
  float: left;
	vertical-align: middle;
	position: relative;
	border: 1px solid #EEEFF1;
	border-radius: 3px;
}

.skin-5 .num-in:hover {
	border: 1px solid #4687FF;
	-webkit-box-shadow: 0px 0px 7px 0px rgba(70, 135, 255, 0.75);
	-moz-box-shadow:    0px 0px 7px 0px rgba(70, 135, 255, 0.75);
	box-shadow:         0px 0px 7px 0px rgba(70, 135, 255, 0.75);
}

.skin-5 .num-in span {
	font-size: 16px;
	width: 20px;
	display: block;
	line-height: 41px;
}

.skin-5 .num-in span.minus {
	float: left;
	text-align: right;
}

.skin-5 .num-in input {
  border: none;
	height: 41px;
	width: 46px;
	float: left;
	text-align: center;
	font-size: 16px;
	font-weight: bold;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
	box-shadow: none !important;
}

.skin-5 .num-in span.plus {
	float: right;
	text-align: left;
}

/* / skin 5 */
    </style>
</head>
    <body>
        @include('layouts.components.new-header')
        <div class="container">
            <div class="mt-3 steps">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="unit-tab" data-bs-toggle="tab" data-bs-target="#unit"
                            type="button" role="tab" aria-controls="unit" aria-selected="false">Seleccionar
                            traslado</button>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information"
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
            {{-- <div class="tab-pane fade" id="unit" role="tabpanel" aria-labelledby="unit-tab">
                <!-- Detalles de vehiculos start -->
                    @include('layouts.tours_tabs.unit')
                <!-- Detalles de vehiculos end -->
            </div> --}}
            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
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
        <script>
        /////////////////// product +/-
        $(document).ready(function() {
            $('.num-in span').click(function () {
                var $input = $(this).parents('.num-block').find('input.in-num');
            if($(this).hasClass('minus')) {
                var count = parseFloat($input.val()) - 1;
                count = count < 1 ? 1 : count;
                if (count < 2) {
                $(this).addClass('dis');
                }
                else {
                $(this).removeClass('dis');
                }
                $input.val(count);
            }
            else {
                var count = parseFloat($input.val()) + 1
                $input.val(count);
                if (count > 1) {
                $(this).parents('.num-block').find(('.minus')).removeClass('dis');
                }
            }

            $input.change();
            return false;
            });

        });
        // product +/-
        </script>
    </body>
</html>
