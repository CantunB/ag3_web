<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ag3 Luxury Travel</title>
    <style>
        html {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #FFFFFF;
            margin: 0;
        }

        /* Evita que los clientes de correo electrónico cambien el tamaño del texto pequeño. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* Evita que Outlook agregue espacio adicional a las tablas */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* Soluciona el problema de relleno de webkit. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            /* table-layout: fixed !important; */
            /* margin: 0 auto !important; */
        }

        /* Utiliza un mejor método de representación al cambiar el tamaño de las imágenes en IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* Evita que Windows 10 Mail subraye enlaces a pesar de CSS en línea. Los estilos de los enlaces subrayados deben estar en línea. */
        a {
            text-decoration: none;
        }


        /* --- header --- */

        .header {
            width: 100%;
            background: #212529;
        }

        .header-content {
            width: 100%;
            font-size: 16px;
        }

        .logo img {
            width: 100%;
            max-width: 100px;
            padding-left: 10px;
        }

        td.details {
            color: #fff;
            text-align: right;
            padding-right: 10px;
        }

        .details h2 {
            margin-bottom: 0;
        }

        .details h3 {
            margin-top: 0;
        }

        /* --- content --- */

        .email-content {
            width: 90%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .title-email {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 26px;
        }

        .title-section {
            background: #FACC01;
            color: #212529;
            padding: 5px 10px 5px 10px;
            margin-bottom: 10px;
            font-size: 24px;
        }

        table.info-content {
            table-layout: fixed;
            width: 100%;
            font-size: 16px;
        }

        table.info-content td {
            word-wrap: break-word;
        }

        td.items {
            border: 2px solid #FACC01;
            padding: 10px;
        }

        span {
            font-weight: bold;
        }

        td.service-img img {
            width: 100%;
        }

        table.arrival-info {
            width: 100%;
            border: 2px solid #FACC01;
            font-size: 16px;
        }

        .arrival-info td {
            padding: 10px;
        }

        /* --- footer --- */

        table.footer {
            width: 100%;
            background: #212529;
            color: #fff;
        }

        table.footer h2 {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 24px;
        }

        .social {
            table-layout: fixed;
            width: 100%;
            margin-bottom: 10px;
        }

        .social img {
          padding-right: 10px;
        }

        .social span {
          font-size: 16px;
        }

        .social td {
            word-wrap: break-word;
        }

        /* --- media queries --- */

        @media only screen and (max-width: 600px) {
            .header-content {
                font-size: 12px !important;
            }

            td.details h3 {
                font-weight: 500 !important;
            }

            .title-email {
                font-size: 22px !important;
            }

            .title-section {
                font-size: 18px !important;
            }

            table.info-content {
              font-size: 13px !important;
            }

            td.service-img {
              display: none !important;
            }

            table.arrival-info {
              font-size: 13px !important;
            }

            table.footer h2 {
                font-size: 20px !important;
            }

            .social img {
              padding-right: 5px !important;
            }

            .social span {
              font-size: 12px !important;
              font-weight: normal !important;
            }
        }
        .centerText{
            text-align: center;
        }

    </style>
</head>

<body>

    <table cellspacing="0" cellpadding="0" class="header" style="width: 100%; background: #000000;">
        <tr>
            <td>
                <table class="header-content" style="width: 100%; font-size: 16px;">
                    <tr>
                        <td class="logo">
                            <img src="http://ag3luxury.com/assets/images/logo.png" alt="logo-empresa" style="width: 100%; max-width: 100px; padding-left: 10px;">
                        </td>
                        <td class="details" style="color: #fff; text-align: right; padding-right: 10px;">
                            <h2 style="margin-bottom: 0;">{{ __('booking.titulo_uno') }}</h2>
                            <h3 style="margin-top: 0;">{{ __('booking.titulo_dos') }}</h3>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <center>
        <table cellspacing="0" cellpadding="0" class="email-content" style="width: 90%; margin-top: 20px; margin-bottom: 20px;">
            <tr>
                <td>
                    <h2 class="title-email" style="text-align: center; margin-top: 10px; margin-bottom: 10px; font-size: 26px;">{{ __('booking.titulo_tres') }}</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_personal') }}</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table cellspacing="0" cellpadding="0" class="info-content" style="table-layout: fixed; width: 100%; font-size: 16px;">
                        <tr>
                            <td class="items" style="word-wrap: break-word; border: 2px solid #FACC01; padding: 10px;">
                                <span style="font-weight: bold;">{{ __('booking.nombre') }}:</span> {{$booking->FullName}}<br>
                                <span style="font-weight: bold;">{{ __('booking.correo') }}:</span> {{$booking->email}} <br>
                                <span style="font-weight: bold;">{{ __('booking.telefono') }}:</span> {{$booking->phone}} <br>
                                <span style="font-weight: bold;">{{ __('booking.pais') }}:</span> {{$booking->Country->name}}<br>
                                <span style="font-weight: bold;">{{ __('booking.estado') }}:</span> {{$booking->State->name}}<br>
                                <span style="font-weight: bold;">{{ __('booking.servicio') }}:</span> {{ $booking->type_service }}<br>
                                <span style="font-weight: bold;">{{ __('booking.origen') }}:</span> {{$booking->origin}} <br>
                                <span style="font-weight: bold;">{{ __('booking.destino') }}:</span> {{$booking->destiny}} <br>
                                <span style="font-weight: bold;">{{ __('booking.vehiculo') }}:</span> {{$booking->TypeUnit->type_units}}<br>
                                <span style="font-weight: bold;">{{ __('booking.pasajeros') }}:</span> {{$booking->passengers}} <br>
                                <span style="font-weight: bold;">{{ __('booking.total') }}:</span> {{$booking->price}} {{$booking->divisa}}
                            </td>
                            <td class="service-img" style="word-wrap: break-word;">
                               @if($booking->request_unit == 1)
                                <img src="http://ag3luxury.com/assets/images/transport-suburban.png"
                                alt="service-suburban" style="width: 100%;">
                               @else
                               <img src="http://ag3luxury.com/assets/images/transport-van.png"

                               alt="service-suburban" style="width: 100%;">
                               @endif
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            @if($booking->type_service == 'Aeropuerto a Hotel')
                <tr>
                    <td>
                        <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_llegada') }}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" class="arrival-info" style="width: 100%; border: 2px solid #FACC01; font-size: 16px;">
                            <tr>
                                <td style="padding: 10px;">
                                    <span style="font-weight: bold;">{{ __('booking.fecha') }}:</span>{{$booking->date_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.hora') }}:</span> {{$booking->time_arrival}} <br>
                                    <span style="font-weight: bold;">{{ __('booking.aerolinea') }}:</span> {{$booking->airline_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.num_vuelo') }}:</span> {{$booking->flight_number_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.comentarios') }}:</span> {{ $booking->comments_arrival}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @elseif($booking->type_service == 'Hotel a Aeropuerto' )
                <tr>
                    <td>
                        <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_salida') }}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" class="arrival-info" style="width: 100%; border: 2px solid #FACC01; font-size: 16px;">
                            <tr>
                                <td style="padding: 10px;">
                                    <span style="font-weight: bold;">{{ __('booking.fecha') }}:</span>{{$booking->date_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.hora') }}:</span> {{$booking->time_departure}} <br>
                                    <span style="font-weight: bold;">{{ __('booking.aerolinea') }}:</span> {{$booking->airline_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.num_vuelo') }}:</span> {{$booking->flight_number_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.comentarios') }}:</span> {{ $booking->comments_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.pickup') }}:</span> {{ $pickup}}<br>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @elseif($booking->type_service == 'Tours')
                <tr>
                    <td>
                        <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_salida') }}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" class="arrival-info" style="width: 100%; border: 2px solid #FACC01; font-size: 16px;">
                            <tr>
                                <td style="padding: 10px;">
                                    <span style="font-weight: bold;">{{ __('booking.fecha') }}:</span>{{$booking->date_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.hora') }}:</span> {{$booking->time_departure}} <br>
                                    <span style="font-weight: bold;">{{ __('booking.comentarios') }}:</span> {{ $booking->comments_departure}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @elseif($booking->type_service == 'Aeropuerto a Hotel a Aeropuerto')
                <tr>
                    <td>
                        <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_llegada') }}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" class="arrival-info" style="width: 100%; border: 2px solid #FACC01; font-size: 16px;">
                            <tr>
                                <td style="padding: 10px;">
                                    <span style="font-weight: bold;">{{ __('booking.fecha') }}:</span>{{$booking->date_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.hora') }}:</span> {{$booking->time_arrival}} <br>
                                    <span style="font-weight: bold;">{{ __('booking.aerolinea') }}:</span> {{$booking->airline_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.num_vuelo') }}:</span> {{$booking->flight_number_arrival}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.comentarios') }}:</span> {{ $booking->comments_arrival}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.info_salida') }}</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" class="arrival-info" style="width: 100%; border: 2px solid #FACC01; font-size: 16px;">
                            <tr>
                                <td style="padding: 10px;">
                                    <span style="font-weight: bold;">{{ __('booking.fecha') }}:</span>{{$booking->date_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.hora') }}:</span> {{$booking->time_departure}} <br>
                                    <span style="font-weight: bold;">{{ __('booking.aerolinea') }}:</span> {{$booking->airline_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.num_vuelo') }}:</span> {{$booking->flight_number_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.comentarios') }}:</span> {{ $booking->comments_departure}}<br>
                                    <span style="font-weight: bold;">{{ __('booking.pickup') }}:</span> {{ $pickup}}<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @endif
            @if ( $booking->type_service == "Hotel a Aeropuerto" || $booking->type_service == "Aeropuerto a Hotel a Aeropuerto")

            <h2 class="title-section">{{ __('booking.preparate') }}</h2>

            <table cellspacing="0" cellpadding="0" class="arrival-info">
                <tr>
                    <td class="centerText">
                        <br>
                        <img src="http://ag3luxury.com/assets/images/three-hours.png"   width="100" height="100"alt="3-horas"> <br>
                        <span>{{ __('booking.vuelo_inter') }}</span><br>
                        {{ __('booking.descripcion_inter') }}
                    </td>
                    <td class="centerText">
                        <br>
                        <img src="http://ag3luxury.com/assets/images/two-hours.png"   width="100" height="100" alt="2-horas"> <br>
                        <span>{{ __('booking.vuelo_nac') }}</span><br>
                        {{ __('booking.descripcion_nac') }}
                    </td>
                </tr>
            </table>
            @endif
            <tr>
                <td>
                    <h2 class="title-section" style="background: #FACC01; color: #212529; padding: 5px 10px 5px 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.metodo_pago') }}:
                        @if ($booking->type_payment == 'Arribo')
                        {{__('arribo')}}
                        @else
                        {{$booking->type_payment}}
                        @endif
                    </h2>
                </td>
            </tr>
        </table>
    </center>

    <table cellspacing="0" cellpadding="0" class="footer" style="width: 100%; background: #000000; color: #fff;">
        <tr>
            <td>
                <h2 style="text-align: center; margin-top: 10px; margin-bottom: 10px; font-size: 24px;">{{ __('booking.titulo_cuatro') }}</h2>
            </td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" class="social" style="table-layout: fixed; width: 100%; margin-bottom: 10px;">
                    <tr>
                        <td align="center" valign="middle" style="word-wrap: break-word;">
                            <a href="https://www.facebook.com/ag3luxury/"
                                style="text-decoration: none; color: #fff;">
                                <img src="http://ag3luxury.com/assets/images/icons/facebook.png" alt="facebook-icon"
                                    width="30" height="30"
                                    style="display: inline-block; vertical-align: middle; width: auto; padding-right: 10px; text-decoration: none;"><span style="font-weight: bold; font-size: 16px;">Facebook</span>
                            </a>
                        </td>
                        <td align="center" valign="middle" style="word-wrap: break-word;">
                            <a href="https://www.instagram.com/ag3_luxurytravel/"
                                style="text-decoration: none; color: #fff;">
                                <img src="http://ag3luxury.com/assets/images/icons/instagram.png" alt="instagram-icon"
                                    width="30" height="30"
                                    style="display: inline-block; vertical-align: middle; width: auto; padding-right: 10px; text-decoration: none;"><span style="font-weight: bold; font-size: 16px;">Instagram</span>
                            </a>
                        </td>
                        <td align="center" valign="middle" style="word-wrap: break-word;">
                            <a href="https://twitter.com/eulloagle/" style="text-decoration: none; color: #fff;">
                                <img src="http://ag3luxury.com/assets/images/icons/twitter.png" alt="twitter-icon"
                                    width="30" height="30"
                                    style="display: inline-block; vertical-align: middle; width: auto; padding-right: 10px; text-decoration: none;"><span style="font-weight: bold; font-size: 16px;">Twitter</span>
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


</body>

</html>
