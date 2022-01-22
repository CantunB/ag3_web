<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
    <title> {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="AG3 Landing page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap v5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/my_styles/bootstrap.min.css') }}">
    <!-- font-awesome v4.7.0 -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <!-- Mis estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/terms.css') }}">
</head>

<body>
    <div id="app" class="super_container">

        @include('layouts.components.new-header')

        <section class="section my-4 terms">
            <div class="container">
                <h1 class="text-center mb-2">Término y condiciones de las políticas de Reembolso y Cancelación de los Servicios</h1>

                <h2>POLITICAS DE RESERVA</h2>
                <p>Las tarifas mencionadas en nuestra página son válidas solo el día que realizó la cotización y aplican específicamente para el servicio solicitado, de lo contrario las tarifas pueden variar. Una reserva se considera completa cuando se tiene un número de confirmación y se ha aplicado el cargo correspondiente. En el momento de realizar la reserva, nos autoriza por escrito y / o verbalmente a utilizar su tarjeta de crédito para realizar el pago y confirma el conocimiento de todos los términos y condiciones. Todas las reservas están sujetas a disponibilidad en la fecha en que se procese su solicitud. No se puede garantizar la disponibilidad hasta que se reciba el pago completo. Su cupón debe ser digital o impreso y mostrarlo cuando reciba el servicio. Las copias de los cupones serán rechazadas. Si desea cambiar o cancelar su reserva, por favor contáctenos por correo electrónico a reserva@ag3luxurytravel.com o al número de teléfono: +52 998 386 2088, (llame o WhatsApp), se debe proporcionar el número de reserva y su nombre completo. Le recomendamos que lea atentamente nuestros términos y condiciones.</p>

                <h2>POLITICAS DE PAGO</h2>
                <p>El monto total de su reserva será cargado inmediatamente a su tarjeta de crédito, débito, PayPal y aparecerá en su estado de cuenta como AG3 DE MÉXICO, SA DE CV Aceptamos tarjetas de crédito Visa, MasterCard y American Express. Si no tiene ninguna de estas tarjetas de crédito, puede enviarnos una transferencia bancaria. Para mayor información por favor contáctenos por correo electrónico a reserva@ag3luxurytravel.com o por teléfono: +52 (998) 386 2088. Las tarifas publicadas en nuestro sitio están en dólares estadounidenses y pesos mexicanos. Los pagos en dólares se cobrarán en pesos mexicanos. En el caso de otra moneda, el monto de la transacción se convertirá a dólares estadounidenses al tipo de cambio del día de la transacción. Debe tener en cuenta que el cargo puede variar en un porcentaje debido al tipo de cambio de moneda internacional.</p>

                <h2>RENUNCIA DE RESPONSABILIDADES</h2>
                <p>AG3 de México SA de CV declara que: Las fotografías mostradas en nuestro sitio web son para uso publicitario, no garantizan una representación exacta a la llegada (el color del vehículo puede variar así como el personal). Cualquier reclamo o notificación por escrito contra www.ag3luxurytravel.com debe recibirse a más tardar 14 días después de finalizar su servicio. www.ag3luxurytravel.com no es responsable de ningún reclamo, costo o gasto causado por lesiones personales o de terceros, accidente o muerte, pérdida o daño de propiedad personal, como resultado de lo siguiente: Los actos u omisiones de cualquier persona que no sea www.ag3luxurytravel.com o sus empleados. Asimismo, enfermedades, robos, disputas laborales, fallas mecánicas, cuarentena, acciones gubernamentales, el clima o cualquier otra causa fuera del control directo de nuestra empresa. La falta del cliente en la obtención de la documentación requerida para su viaje, pero no limitado a, entre ellos, pasaportes, visas, certificados, en cuyo caso el cliente no tiene derecho a devolución alguna. Nos reservamos el derecho de cancelar o cambiar los servicios a nuestra discreción e intentaremos reemplazarlos con servicios similares. Si consideramos necesario cancelar completamente su reserva, nuestra responsabilidad se limita al reembolso completo del servicio pagado. Por razones de una causa mayor fuera de nuestro control, pero no limitado a, incluyendo el clima, huracanes, terremotos, actos de terrorismo, pandemias, guerras, etc.</p>

                <h2>POLÍTICA DE CANCELACIÓN Y REEMBOLSO</h2>
                <p>Cualquier solicitud de cancelación debe ser comunicada por escrito por correo electrónico contacto@ag3luxurytravel.com o al número de teléfono: +52 998 386 2088, (llame o WhatsApp), a nuestro Departamento de Atención al Cliente, mencionando su número de reserva.</p>
                <ol>
                    <li>1. Para cancelar su reserva sin costo y obtenga la devolución del 100%,  debe comunicarse con nosotros por correo electrónico 48 horas  a la prestación  de su servicio, indicando su número de confirmación.</li>
                    <li>2. Si cancela con 24 horas de anticipación a la prestación de  su servicio, se le reembolsara el 50% del pago hecho a su reserva, solamente en un servicio el de llegada (Aeropuerto-Hotel), si su reserva cuenta con el servicio de regreso salida (Hotel-Aeropuerto) se le reembolsa el 100% del segundo servicio.</li>
                    <li>3. Si cancela con 12 horas de anticipación a la prestación de su servicio, se le reembolsara el 25% del pago hecho a su reserva, solamente en un servicio el de llegada (Aeropuerto-Hotel), si su reserva cuenta con el servicio de regreso salida (Hotel-Aeropuerto) se le reembolsa el 100% del segundo servicio.</li>
                    <li>4. Las cancelaciones menores a 12 horas o la no presentación a su servicio no tendrá derecho a ningún reembolso solamente en un servicio el de llegada (Aeropuerto-Hotel), si su reserva cuenta con el servicio de regreso salida (Hotel-Aeropuerto) se le reembolsa el 100% del segundo servicio.</li>
                    <li>5. En los servicios de salida (Hotel-Aeropuerto) el reembolso del 100% se efectuara cuando la cancelación se haga con 24 horas de anticipación, a la salida del hotel Pick Up. El reembolso del 50% se este servicio se hará cuando la cancelación se haga con 12 horas de anticipación a la salida del Hotel Pick Up de la hora indicada.</li>
                    <li>6. Las cancelaciones menores a 12 horas o en caso no utilizar del servicio de Salida (Hotel-Aeropuerto) por causa imputadas al cliente no tendrá derecho a ningún reembolso.</li>
                </ol>

                <p>Después de la notificación que hagan el cliente por la cancelación de su servicio al correo electrónico contacto@ag3luxurytravel.com o al número de teléfono: +52 998 386 2088, (llame o WhatsApp, AG3 de México SA de CV tendrá 72 horas para hacer el reembolso, abono, a la cuenta de la tarjeta bancaria de donde se cargó la reserva, dependiendo del supuesto del tiempo de la cancelación.</p>
            </div>
        </section>

        @include('layouts.components.new-footer')
        @include('layouts.components.scripts')
    </div>

</body>

</html>
