<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ag3 Luxury Travel</title>
</head>
<style>
    html {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 8mm 8mm 2mm 8mm;
    }

    table.header {
        width: 100%;
        background: #212529;
    }

    table.header table.header-content {
        width: 100%;
    }

    td.logo img {
        width: 100%;
        max-width: 100px;
    }

    td.details {
        color: #fff;
        text-align: right;
        padding-right: 10px;
    }

    table.information-personal {
        width: 100%;
    }

    table.info-content {
        table-layout: fixed;
        width: 100%;
    }

    table.info-content td {
        word-wrap: break-word;
    }

    .title-section {
        background: #FACC01;
        color: #212529;
        margin-bottom: 5px;
        padding: 5px 10px 5px 10px;
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

    .arrival-info {
        width: 100%;
        border: 2px solid #FACC01;
    }

    .arrival-info td {
        padding: 10px;
    }
</style>
<body>
    <table cellspacing="0" cellpadding="0" class="header">
        <tr>
            <td colspan="2">
                <table class="header-content">
                    <tr>
                        <td class="logo">
                            <img src="http://ag3.stigmacode.com/assets/images/logo.png" alt="logo-empresa">
                        </td>
                        <td class="details">
                            <span>No. Servicio:</span> {{ $booking->id }}<br>
                            <span>Fecha de creacion:</span> {{ \Carbon\Carbon::now()->toDateString() }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <h2 class="title-section">Informacion Personal</h2>

    <table cellspacing="0" cellpadding="0" class="information-personal">
        <tr>
            <td colspan="2">
                <table class="info-content">
                    <tr>
                        <td class="items">
                            <span>NOMBRE:</span> {{$booking->FullName}}<br>
                            <span>CORREO:</span> {{$booking->email}}<br>
                            <span>TELEFONO:</span> {{ $booking->phone }}<br>
                            <span>PAIS:</span>  {{ $booking->Country->name}}<br>
                            <span>ESTADO:</span>  {{ $booking->State->name}}<br>
                            <span>SERVICIO:</span> {{ $booking->type_service }}<br>
                            <span>ORIGEN:</span> {{$booking->origin}}<br>
                            <span>DESTINO:</span> {{ $booking->destiny }}<br>
                            <span>VEHICULO SOLICITADO:</span> {{ $booking->TypeUnit->type_units}}<br>
                            <span>PASAJEROS:</span>{{ $booking->passengers}} <br>
                            <span>TOTAL:</span> {{$booking->price}} MXN
                        </td>
                        <td class="service-img">
                            @if ($booking->request_unit == 1)
                                <img src="http://ag3.stigmacode.com/assets/images/transport-suburban-min.png" alt="service-suburban">
                            @else
                                <img src="http://ag3.stigmacode.com/assets/images/transport-van-min.png" alt="service-van">
                            @endif

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @if ( $booking->type_service == "Aeropuerto a Hotel")
        <h2 class="title-section">Informacion de llegada</h2>

        <table cellspacing="0" cellpadding="0" class="arrival-info">
            <tr>
                <td>
                    <span>FECHA:</span> {{ $booking->date_arrival }}<br>
                    <span>HORA:</span> {{ $booking->time_arrival }}<br>
                    <span>AEROLINEA:</span> {{ $booking->airline_arrival}}<br>
                    <span>NUMERO DE VUELO:</span> {{$booking->flight_number_arrival}}<br>
                    <span>COMENTARIOS: {{ $booking->comments_arrival}}</span>
                </td>
            </tr>
        </table>
    @elseif ( $booking->type_service == "Hotel a Aeropuerto" )
        <h2 class="title-section">Informacion de Salida</h2>

        <table cellspacing="0" cellpadding="0" class="arrival-info">
            <tr>
                <td>
                    <span>FECHA:</span> {{ $booking->date_departure }}<br>
                    <span>HORA:</span> {{ $booking->time_departure }}<br>
                    <span>AEROLINEA:</span> {{ $booking->airline_departure}}<br>
                    <span>NUMERO DE VUELO:</span>  {{$booking->flight_number_departure}}<br>
                    <span>COMENTARIOS: {{ $booking->comments_departure}}</span>
                    <span>PICK-UP:</span>

                </td>
            </tr>
        </table>
    @elseif ( $booking->type_service == "Tours")
        <h2 class="title-section">Informacion de Salida</h2>

        <table cellspacing="0" cellpadding="0" class="arrival-info">
            <tr>
                <td>
                    <span>FECHA:</span> {{ $booking->date_departure }}<br>
                    <span>HORA:</span> {{ $booking->time_departure }}<br>
                    <span>COMENTARIOS: {{ $booking->comments_departure}}</span>
                    <span>PICK-UP:</span>

                </td>
            </tr>
        </table>
    @elseif ( $booking->type_service == "Aeropuerto a Hotel a Aeropuerto")
        <h2 class="title-section">Informacion de llegada</h2>

        <table cellspacing="0" cellpadding="0" class="arrival-info">
            <tr>
                <td>
                    <span>FECHA:</span> {{ $booking->date_arrival }}<br>
                    <span>HORA:</span> {{ $booking->time_arrival }}<br>
                    <span>AEROLINEA:</span> {{ $booking->airline_arrival}}<br>
                    <span>NUMERO DE VUELO:</span> {{$booking->flight_number_arrival}}<br>
                    <span>COMENTARIOS: {{ $booking->comments_arrival}}</span>
                </td>
            </tr>
        </table>
        <h2 class="title-section">Informacion de Salida</h2>

        <table cellspacing="0" cellpadding="0" class="arrival-info">
            <tr>
                <td>
                    <span>FECHA:</span> {{ $booking->date_departure }}<br>
                    <span>HORA:</span> {{ $booking->time_departure }}<br>
                    <span>AEROLINEA:</span> {{ $booking->airline_departure}}<br>
                    <span>NUMERO DE VUELO:</span>  {{$booking->flight_number_departure}}<br>
                    <span>COMENTARIOS: {{ $booking->comments_departure}}</span>
                    <span>PICK-UP:</span>

                </td>
            </tr>
        </table>

    @endif


    <h2 class="title-section"><span>Metodo de pago:</span> {{$booking->type_payment}}</h2>

</body>

</html>
