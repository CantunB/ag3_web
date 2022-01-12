<link rel="stylesheet" href="{{ asset('css/pdf.css') }}">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ag3 Luxury Travel</title>
</head>

<body>
    <table cellspacing="0" cellpadding="0" class="header">
        <tr>
            <td colspan="2">
                <table class="header-content">
                    <tr>
                        <td class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo-empresa">
                        </td>
                        <td class="details">
                            <span>No. Servicio:</span> Book-182<br>
                            <span>Fecha de creacion:</span> 10 Enero, 2022
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
                            <span>NOMBRE:</span> Jose Felix Hernandez Ortiz<br>
                            <span>CORREO:</span> resywolut@mailinator.com<br>
                            <span>TELEFONO:</span> +1 (836) 326-7577<br>
                            <span>PAIS:</span> Mexico<br>
                            <span>ESTADO:</span> Campeche<br>
                            <span>SERVICIO:</span> Aeropuerto a Hotel<br>
                            <span>DESTINO:</span> ALTITUDE BY KRYSTAL GRAND PUNTA CANCUN<br>
                            <span>VEHICULO SOLICITADO:</span> Suburban<br>
                            <span>PASAJEROS:</span> 2<br>
                            <span>EXTRAS:</span> Botella de Agua<br>
                            <span>TOTAL:</span> $2400 MXN
                        </td>
                        <td class="service-img">
                            <img src="{{ asset('assets/images/transport-suburban-min.png') }}" alt="service-suburban">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <h2 class="title-section">Informacion de llegada</h2>

    <table cellspacing="0" cellpadding="0" class="arrival-info">
        <tr>
            <td>
                <span>FECHA:</span> 2022-01-03<br>
                <span>HORA:</span> 12:00<br>
                <span>AEROLINEA:</span> NOVAIR<br>
                <span>NUMERO DE VUELO:</span> 241<br>
                <span>COMENTARIOS:</span>
            </td>
        </tr>
    </table>

    <h2 class="title-section"><span>Metodo de pago:</span> Efectivo</h2>

</body>

</html>
