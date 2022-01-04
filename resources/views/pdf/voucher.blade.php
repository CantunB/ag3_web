<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            background-color: #000000;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            background-color: #000000;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <img src="http://ag3.stigmacode.com/assets/images/logo.png" alt="AG3" width="120" height="100">
</header>

<main>
    <div class="container">
        {{-- <table class="tg bg_light" style="width: 500px">

            <tbody>
              <tr>
                <td style="text-transform: uppercase" class="tg-vvf4" colspan="15">Del aeropuerto a tu destino,  tu transportación VIP LUXURY como te lo mereces </td>
              </tr>
              <tr>
                <td class="tg-qz2x" colspan="11">DETALLES </td>
                <td class="tg-qz2x" colspan="4">PRECIO</td>
              </tr>
              <tr>
                <td class="tg-c3ow"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td style=" padding:25px;" class="tg-0pky" colspan="7" rowspan="4">
                    <div class="container" style="border:2px solid orange; border-radius: 25px; padding: 4%">
                        <span style="font-weight: bold">No.SERVICIO:</span> <span style="text-transform: uppercase">{{ $booking->id }}</span> <br><br><span style="font-weight:bold">NOMBRE: </span><span style="text-transform: uppercase; ">{{ $booking->fullname }}</span><br><span style="font-weight:bold">CORREO:</span> {{ $booking->email }}<br><span style="font-weight:bold">TELEFONO:</span> {{ $booking->phone }}<br><span style="font-weight:bold">PAIS:</span> {{ 'MEXICO'  }} <span style="font-weight:bold"> ESTADO:</span> {{ 'CAMPECHE' }} <br><br><br><span style="text-transform: uppercase; font-weight:bold">{{ $booking->type_service }}:</span><br><span style="text-transform: uppercase;">{{ $booking->origin }}</span> - <span style="text-transform: uppercase;">{{ $booking->destiny }}</span><br><br><br><span style="font-weight:bold">VEHICULO SOLICITADO:</span><br> @if ( $booking->request_unit == 1) SUBURBAN PARA {{ $booking->passengers }} PASAJEROS @else  SUBURBAN PARA {{ $booking->passengers }} PASAJEROS @endif <br>
                    </div>
                </td>
                <td class="tg-4qqe" colspan="4" rowspan="4"><br><br><br><br><br><span style="font-weight:bold">${{ $booking->price }}MX</span><br></td>
              </tr>
              <tr>
                <td class="tg-0pky"></td>
                <td class="tg-c3ow" colspan="2" rowspan="2">
                    @if ($booking->request_unit == 1)
                        <img src="http://ag3.stigmacode.com/assets/images/transport-suburban.png" width="250" height="250">
                    @else
                        <img src="http://ag3.stigmacode.com/assets/images/transport-van.png" width="250" height="250">
                    @endif
                </td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
                @if ( $booking->type_service == 'Aeropuerto a Hotel')
                    <tr>
                        <td style="padding: 2" class="tg-qz2x" colspan="15">INFORMACION DE LLEGADA</td>
                    </tr>
                    <tr>
                        <td style=" padding:25px;" class="tg-0pky" colspan="15" rowspan="2">
                            <div class="container" style="border:2px solid orange; border-radius: 25px; padding: 3%">
                                <span style="font-weight:bold">FECHA:</span> {{ $booking->date_arrival }}<br><span style="font-weight:bold">HORA: </span>{{  $booking->time_arrival }} <br><span style="text-transform: uppercase; font-weight:bold">AEROLINEA:  </span> <span style="text-transform: uppercase">{{ $booking->airline_arrival }} </span> <span style="text-transform: uppercase;  font-weight:bold">NUMERO DE VUELO:  </span> {{  $booking->flight_number_arrival}}   <br><br><span style="font-weight:bold">COMENTARIOS: </span>{{ $booking->comments_arrival }}<br><br>
                            </div>
                        </td>

                    </tr>
                @elseif( $booking->type_service == 'Hotel a Aeropuerto')
                    <tr>
                        <td class="tg-qz2x" colspan="15">INFORMACION DE SALIDAD</td>
                    </tr>
                    <tr>
                        <td style=" padding:25px;" class="tg-0pky" colspan="15" rowspan="2">
                            <div class="container" style="border:2px solid orange; border-radius: 25px; padding: 3%">
                            <span style="font-weight:bold">FECHA: </span>{{ $booking->date_departure }}<br><span style="font-weight:bold">HORA: </span>{{ $booking->time_departure }}<br><span style="text-transform: uppercase;  font-weight:bold">AEROLINEA:  </span> <span style="text-transform: uppercase">{{ $booking->airline_departure }}<span>   <span style="text-transform: uppercase;  font-weight:bold">NUMERO DE VUELO: </span> <span style="text-transform: uppercase">{{  $booking->flight_number_departure }}</span>     <br><br><span style="font-weight:bold">COMENTARIOS: </span>{{ $booking->comments_departure }}<br><br><span style="font-weight:bold">PICK-UP: </span>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td class="tg-qz2x" colspan="7">INFORMACION DE LLEGADA</td>
                        <td class="tg-qz2x"></td>
                        <td class="tg-qz2x" colspan="7">INFORMACION DE SALIDAD</td>
                    </tr>
                    <tr>
                        <td class="tg-0pky" colspan="7" rowspan="2">
                            <span style="font-weight:bold">FECHA: </span>{{ $booking->date_arrival }}<br><span style="font-weight:bold">HORA: </span>{{ $booking->time_arrival }}<br><span style="text-transform: uppercase; font-weight:bold">AEROLINEA: </span> <span style="text-transform: uppercase">{{ $booking->airline_arrival }} </span> <span style="text-transform: uppercase; font-weight:bold">NUMERO DE VUELO:  </span> <span style="text-transform: uppercase"> {{ $booking->flight_number_arrival }}</span>    <br><br><span style="font-weight:bold">COMENTARIOS: </span>{{ $booking->comments_arrival }}<br><br>
                        </td>
                        <td class="tg-0pky" rowspan="2"></td>
                        <td class="tg-0pky" colspan="7" rowspan="2">
                            <span style="font-weight:bold">FECHA: </span>{{ $booking->date_departure }}<br><span style="font-weight:bold">HORA: </span>{{ $booking->time_departure }}<br><span style=" text-transform: uppercase; font-weight:bold">AEROLINEA:  </span> <span style="text-transform: uppercase">{{ $booking->airline_departure }} </span>  <span style="text-transform: uppercase; font-weight:bold">NUMERO DE VUELO: </span><span style="text-transform: uppercase">{{ $booking->flight_number_departure }}</span>     <br><br><span style="font-weight:bold">COMENTARIOS: </span>{{ $booking->comments_departure }}<br><br><span style="font-weight:bold">PICK-UP: </span>
                        </td>
                    </tr>
                @endif
              <tr>
              </tr>
              <tr>
                <td class="tg-qz2x" colspan="15"><strong style="text-transform: uppercase; font-weight:bold">METODO DE PAGO SELECCIONADO: {{ $booking->type_payment }}</strong>    </td>
              </tr>
            </tbody>
        </table> --}}
    </div>
</main>

<footer>
    <a href="http://ag3.stigmacode.com/"><img src="http://ag3.stigmacode.com/assets/images/logo.png" alt="AG3" width="120" height="100"></a>
</footer>
</body>
</html>
