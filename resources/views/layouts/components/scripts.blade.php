{{---------------------------------------------------------------------------- */
/*                              LISTA DE SCRIPTS                              */
/* ----------------------------------------------------------------------------}}

{{--
    * NOTE Cadad que se agregue un script se debe comentar y especificar una funcionalidad
    * REVIEW
    * ANCHOR
    * TODO
    * FIXME
    * SECTION
    * LINK
    * STUB
--}}

{{-------------------------------- /* LARAVEL MIX VUE JS */ --------------------------------------------}}
<script src="{{ mix('/js/app.js') }}"></script>

{{--------------------------- /* LENGUAJE */ -------------------------------------------------}}
    <script>
        function lenguaje() {
            var idioma =  "{{ app()->getLocale() }}";
            return idioma;
        }
    </script>

    <script>

        function lang_main(){
            var locale =  lenguaje();
            if (locale == 'es') {
                return [
                    'Transporte Seguro',
                    'Servicio Privado',
                    'Puntualidad',
                    'Comodidad'
                ];
            }else if (locale == 'en') {
                return  [
                    'Safe transportation',
                    'Private service',
                    'Puntuality',
                    'Comfort'
                ];
            }else if (locale == 'fr') {
                return [
                    'Transport sécurisé',
                    'Service privé',
                    'Ponctualité',
                    'Confort'
                ];
            }
        }
    </script>

    <script src="{{ asset('assets/js/lang.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/home.js') }}"></script>
{{-- -------------------------------Typed.js v2.0.12 --------------------------------------- --}}
    <script src="{{ asset('assets/js/scripts/typed.js') }}"></script>
{{----------------------------Main.js---------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/main.js') }}"></script>
{{----------------------------jQuery v3.6.0----------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/jquery.min.js') }}"></script>
{{----------------------------Select2 v4.0.13----------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/select2.full.min.js') }}"></script>
{{-------------------------------FontAwesome-------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/41bcea2ae3.js') }}"></script>
{{------------------------------Flatpickr v4.6.9--------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/flatpickr.js') }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
{{------------------------------ Dark Mode --------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/dark-mode.js') }}"></script>
{{-------------------------------Gallery-------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/gallery.js') }}"></script>
{{-------------------------------Tours-show-------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/tours-show.js') }}"></script>
{{-------------------------------Testimonials-------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/testimonials.js') }}"></script>
{{--  /* ----------------------------------Maquetar imagenes ---------------------------------------- */  --}}
    <script src="{{ asset('assets/js/holder.js')}}"></script>
{{---------------------------ParsleyJS Validation----------------------------------------------}}
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/i18n/es.js') }}"></script>
    <script src="{{ asset('assets/js/i18n/fr.js') }}"></script>
    <script type="text/javascript">
        window.onload = function () {
            {{-- //var parsley_lang = navigator.language || navigator.userLanguage; --}}
            var locale =  lenguaje();
            if (locale == 'es') {
                window.Parsley.setLocale('es');
            }else if (locale == 'en') {
                window.Parsley.setLocale('en');
            }else if (locale == 'fr') {
                window.Parsley.setLocale('fr');
            }
        }
    </script>
{{----------------------- /* TODO SWEETALERT  */ --------------------------------------------------}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{---------------------------- /*TODO CONTACT FORM */ ----------------------------------------}}
    <script src="{{ asset('assets/js/contact.js') }}"></script>
{{----------------------- /*TODO INPUTS SELECTS (SELECT 2) */ ---------------------------------}}
    <script src="{{ asset('assets/js/selects.js') }}"></script>
{{------------------------ /* TODO FORMULARIO DE BUSQUEDA */ -----------------------------------}}
    <script src="{{ asset('assets/js/search.js') }}"></script>
{{------------------------ /* TODO INPUTS DE TIEMPO Y FECHA (FLATPICKR) */ -------------------------------}}
    <script>
        $(".selector").flatpickr({
                minDate: "today",
                dateFormat: "Y-m-d",
                locale: lenguaje()
            });
        $(".timer").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
        });
    </script>
{{--------------------------  TODO[paypal]PAYPAL  -----------------------------------------}}
    {{----------------  SECTION[sandbox] Actualmente se opera con sandbox  ------------}}
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AYh6SsC21DLPKSQlkxE4XEPxcTq6-UDo_S6xtbD0Q3l2FH1EUEoTkvPbx0YC0NWktEm1NqjhR2FhxHCT&currency=MXN&locale=es_MX"></script> --}}
    {{----------------  SECTION[Live] Operara en modo produccion  ------------}}
    <script src="https://www.paypal.com/sdk/js?client-id=AeDTv5lusxz7nOGDqGN1HWA2_EAI-1LsObWGD48reqPNRieFy80rF4JHCTfFl8664nd1HYY3mVMmfkeR&currency=MXN&locale=es_MX"></script>

{{---------------------  TODO TARIFAS PRESENTADAS DEPENDIENDO EL TIPO DE SERVICIO ELEGIDO  --------------------------}}
    <script src="{{ asset('assets/js/service_show.js') }}"></script>

{{---------------------  TODO NOMBRE COMPLETO AUTOCOMPLETE   --------------------------}}
    <script src="{{ asset('assets/js/autocomplete_name.js') }}"></script>

{{---------------------  TODO COUNTRY STATE DROPDOWN DEPENDENT--------------------------}}
    <script src="{{ asset('assets/js/country_state.js') }}"></script>

{{-- /* -------------------TODO IATA CODE DROPDOWN DEPENDENT AIRLINTE------------------------------------------------------- */ --}}
    <script src="{{ asset('assets/js/airlines_iata.js') }}"></script>

{{--------------------- /*  TODO */--------------------------}}
    <script src="{{ asset('assets/js/booking.js') }}"></script>

{{---------------------/*  TODO TRASLADOS */ --------------------------}}
    <script src="{{ asset('assets/js/traslados.js') }}"></script>

{{---------------------/* TODO CDN TOOLTIP TYPI.JS */-------------}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        tippy('#tooltip_time', {
            content: '<ul><li>{!! __('booking.tooltip_services_ah') !!}<br></li><li>{!! __('booking.tooltip_services_ha') !!}<br></li><li>{!! __('booking.tooltip_services_aha') !!}</li></ul>',
            arrow: true,
            animation: 'scale-subtle',
            allowHTML: true,
            theme: 'gradient',
            followCursor: true,


        });
    </script>


{{--------------------- /*  SECTION[metodos pago] RadioButton para seleccionar el metodo de pago */ --------------------------}}
    <script src="{!! asset('assets/js/method_payment.js') !!}"></script>

{{---------------------  /* SECTION[metodo de pago arrivo] Envio de formulario por ajax */--------------------------}}
    <script src="{{ asset('assets/js/arrivo.js') }}"></script>

{{--------------------- /* SECTION[metodo de pago por paypal] Envio de formulario por ajax */ --------------------------}}
    <script src="{{ asset('assets/js/paypal.js') }}"></script>

{{-------------------------------- /* INPUT SPINNER */ ----------------------------------------------}}
    <script>
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
    </script>

 {{------------------------------- /*API DIVISAS */--------------------------------------------}}
    <script>
        const formatterPeso = new Intl.NumberFormat('es-ES', {
            style: 'currency',
            currency: 'MXN',
            minimumFractionDigits: 0
        })
        const formatterDolar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        })
        const formatterEuro = new Intl.NumberFormat('de-DE', {
            style: 'currency',
            currency: 'EUR'
        })
        const formatterYenes = new Intl.NumberFormat("ja-JP", {
            style: 'currency',
            currency: 'JPY'
        })
        var peso = 1;  // Valor de divisa Peso
        var dolar = {!! $currency_dolar !!}; //Valor de divisa Dollar
        var euro = {!! $currency_euro !!}; //Valor de divisa Euro

        window.addEventListener('load', function(){
            var array = new Array();
            var array_etiqutas = new Array();
            var array_inputs = new Array();
            var array_inputs_mx = new Array();
            var array_divisas_inputs = new Array();


            //alert("Hola, soy una alerta que sólo aparecerá 1 vez.");
            const elements = document.querySelectorAll('.tarifas');
            //console.log(elements);
            //var prices = document.getElementsByClassName("prices")[0].innerHTML;
            Array.from(elements).forEach((element, index) => {
                //console.log(element.innerHTML);
                array.push(parseFloat(element.defaultValue));
                //console.log(precio);
            });

            etiquetas = document.querySelectorAll('.prices');
            Array.from(etiquetas).forEach((etiqueta, index) => {
                array_etiqutas.push(etiqueta);
            });

            inputs = document.querySelectorAll('.prices_inputs');
            Array.from(inputs).forEach((input, index) => {
                array_inputs.push(input);
            });

            inputs_mx = document.querySelectorAll('.prices_inputs_mx');
            Array.from(inputs_mx).forEach((input_mx, index) => {
                array_inputs_mx.push(input_mx);
            });

            divas_inputs = document.querySelectorAll('.divisas_inputs');
            Array.from(divas_inputs).forEach((divisa_input, index) => {
                array_divisas_inputs.push(divisa_input);
            });

            // {{-- /* -----------------------------REVIEW[TEST] VALIDACION PARA EL TIPO DE MONEDA --------------------------------------------- */ --}}
            var laravel_locale =  "{{ app()->getLocale() }}";
            var locale = navigator.language || navigator.userLanguage;

            if (laravel_locale == 'es') {
                /*Aqui ira el script cuando mi idioma detectado es español */
                Array.from(array).forEach((element, index) => {
                    divisa = peso * element;
                    new_divisa = formatterPeso.format(divisa)
                    //console.log(array_etiqutas.innerHTML = new_divisa)
                    array_etiqutas[index].innerHTML = new_divisa
                    array_inputs[index].value = divisa
                    //document.getElementByClassName("mytext").value = "My value";
                    array_inputs_mx[index].value = element;
                    array_divisas_inputs[index].value = "MXN"
                });
            }else if (laravel_locale == 'en') {
                /*Aqui ira el script cuando mi idioma detectado es ingles */
                Array.from(array).forEach((element, index) => {

                    divisa = Math.round(element/dolar * 100) / 100;
                    //console.log(formatterDolar.format(divisa))
                    new_divisa = formatterDolar.format(divisa)
                    array_etiqutas[index].innerHTML = new_divisa + " USD"
                    array_inputs[index].value = divisa
                    array_inputs_mx[index].value = element
                    array_divisas_inputs[index].value = "USD"

                });
            }else if (laravel_locale == 'fr') {
                /*Aqui ira el script cuando mi idioma detectado es frances*/
                Array.from(array).forEach((element, index) => {
                    divisa = Math.round(element/euro * 100) / 100;
                    //console.log(formatterEuro.format(divisa));
                    new_divisa = formatterEuro.format(divisa)
                    array_etiqutas[index].innerHTML = new_divisa
                    array_inputs[index].value = divisa
                    array_inputs_mx[index].value = element
                    array_divisas_inputs[index].value = "EUR"


                });

            }


        }, false);

    /*
    console.log("Consultando...");
        fetch("http://api.exchangeratesapi.io/v1/latest?access_key=fdfd1c673832210ffa6b8413e7004ddf")
        .then(respuesta => respuesta.json())
        .then(respuestaDecodificada => {
            console.log(respuestaDecodificada);
        });
    */

    </script>

        <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '538832074132098');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=538832074132098&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
