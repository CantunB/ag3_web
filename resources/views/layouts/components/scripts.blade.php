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

{{-- /* -------------------------------LARAVEL MIX VUE JS------------------------------------------- */ --}}
     <script src="{{ mix('/js/app.js') }}"></script>

{{--  /* -------------------------------------------------------------------------- */  --}}
    <script src="{{ asset('assets/js/scripts/home.js') }}"></script>

{{---------------------------------Typed.js v2.0.12 -----------------------------------------}}
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
            //var parsley_lang = navigator.language || navigator.userLanguage;
            var locale =  "{{ app()->getLocale() }}";
            if (locale == 'es') {
                window.Parsley.setLocale('es');
            }else if (locale == 'en') {
                window.Parsley.setLocale('en');
            }else if (locale == 'fr') {
                window.Parsley.setLocale('fr');
            }
        }
    </script>
{{----------------------- TODO SWEETALERT  --------------------------------------------------}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{---------------------------- TODO CONTACT FORM  ----------------------------------------}}
    <script src="{{ asset('assets/js/contact.js') }}"></script>
{{----------------------- TODO INPUTS SELECTS (SELECT 2)  ---------------------------------}}
    <script src="{{ asset('assets/js/selects.js') }}"></script>
{{------------------------  TODO FORMULARIO DE BUSQUEDA  -----------------------------------}}
    <script src="{{ asset('assets/js/search.js') }}"></script>
{{------------------------  TODO INPUTS DE TIEMPO Y FECHA (FLATPICKR)  -------------------------------}}
    <script>
        var locale =  "{{ app()->getLocale() }}";
        $(".selector").flatpickr({
                minDate: "today",
                dateFormat: "Y-m-d",
                locale: locale
            });
        $(".timer").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
        });
    </script>
{{--------------------------  TODO[paypal]PAYPAL  -----------------------------------------}}
    {{----------------  SECTION[sandbox] Actualmente se opera con sandbox  ------------}}
    <script src="https://www.paypal.com/sdk/js?client-id=AYh6SsC21DLPKSQlkxE4XEPxcTq6-UDo_S6xtbD0Q3l2FH1EUEoTkvPbx0YC0NWktEm1NqjhR2FhxHCT"></script>
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AU2DbQtBBLLeQqilw6ryutLRofQ0pL_Qq_9NeLX4V4Nq6O15NTklI5uzRk4yu8mg8U0wo6PBdpt2y1Xc&components=buttons&currency=MXN&locale=es_MX"></script> --}}
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AU2DbQtBBLLeQqilw6ryutLRofQ0pL_Qq_9NeLX4V4Nq6O15NTklI5uzRk4yu8mg8U0wo6PBdpt2y1Xc"></script> --}}
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=AeDTv5lusxz7nOGDqGN1HWA2_EAI-1LsObWGD48reqPNRieFy80rF4JHCTfFl8664nd1HYY3mVMmfkeR&currency=USD&locale=es_MX"></script> --}}
    {{-- laguna1959 --}}

{{---------------------  TODO TARIFAS PRESENTADAS DEPENDIENDO EL TIPO DE SERVICIO ELEGIDO  --------------------------}}
    <script src="{{ asset('assets/js/service_show.js') }}"></script>

{{---------------------  TODO NOMBRE COMPLETO AUTOCOMPLETE   --------------------------}}
    <script src="{{ asset('assets/js/autocomplete_name.js') }}"></script>

{{---------------------  TODO COUNTRY STATE DROPDOWN DEPENDENT--------------------------}}
    <script src="{{ asset('assets/js/country_state.js') }}"></script>

{{-- /* -------------------TODO IATA CODE DROPDOWN DEPENDENT AIRLINTE------------------------------------------------------- */ --}}
    <script src="{{ asset('assets/js/airlines_iata.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/booking.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/traslados.js') }}"></script>

{{---------------------  SECTION[metodos pago] RadioButton para seleccionar el metodo de pago --------------------------}}
    <script src="{{ asset('assets/js/method_payment.js') }}"></script>

{{---------------------  SECTION[metodo de pago arrivo] Envio de formulario por ajax--------------------------}}
    <script src="{{ asset('assets/js/arrivo.js') }}"></script>

{{---------------------  SECTION[metodo de pago por paypal] Envio de formulario por ajax --------------------------}}
    <script src="{{ asset('assets/js/paypal.js') }}"></script>

{{-- /* ------------------------------INPUT SPINNER-------------------------------------------- */ --}}
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

 {{-- /* -----------------------------API DIVISAS--------------------------------------------- */ --}}
    <script>
        window.addEventListener('load', function(){
            //alert("Hola, soy una alerta que sólo aparecerá 1 vez.");
            const elements = document.querySelectorAll('.tarifas');
            //console.log(elements);
            //var prices = document.getElementsByClassName("prices")[0].innerHTML;
            Array.from(elements).forEach((element, index) => {
                //console.log(element.innerHTML);
                precio = parseFloat(element.defaultValue);
                console.log(precio);
            });

            console.log(precio);


        }, false);


        var value = 1250;
        var peso = 1;  // Valor de divisa Peso
        var dolar = 20.50; //Valor de divisa Dollar
        var euro = 23.25; //Valor de divisa Euro

    const formatterPeso = new Intl.NumberFormat('es-ES', {
        style: 'currency',
        currency: 'MXN',
        minimumFractionDigits: 0
    })
    //console.log(formatterPeso.format(value))
    // → $ 12.500

    const formatterDolar = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    })
    //console.log(formatterDolar.format(value))
    // → $12,500.00

    const formatterEuro = new Intl.NumberFormat('de-DE', {
        style: 'currency',
        currency: 'EUR'
    })
    //console.log(formatterEuro.format(value))
    // → 12.500,00 €

    // el yen japonés no tiene ninguna subdivisión
    const formatterYenes = new Intl.NumberFormat("ja-JP", {
        style: 'currency',
        currency: 'JPY'
    })
    //console.log(formatterYenes.format(value))
    // → ￥12,500

    /*
    console.log("Consultando...");
        fetch("http://api.exchangeratesapi.io/v1/latest?access_key=fdfd1c673832210ffa6b8413e7004ddf")
        .then(respuesta => respuesta.json())
        .then(respuestaDecodificada => {
            console.log(respuestaDecodificada);
        });
    */

{{-- /* -----------------------------REVIEW[TEST] VALIDACION PARA EL TIPO DE MONEDA --------------------------------------------- */ --}}
    var laravel_locale =  "{{ app()->getLocale() }}";
    var locale = navigator.language || navigator.userLanguage;

            if (laravel_locale == 'es') {
                /*Aqui ira el script cuando mi idioma detectado es español */
                const divisa = peso * value;
                console.log(formatterDolar.format(divisa))
            }else if (laravel_locale == 'en') {
                /*Aqui ira el script cuando mi idioma detectado es ingles */
                //  const divisa = value/dolar;
                divisa = Math.round(value/dolar * 100) / 100;
                console.log(formatterDolar.format(divisa))
            }else if (laravel_locale == 'fr') {
                /*Aqui ira el script cuando mi idioma detectado es frances*/
                divisa = Math.round(value/euro * 100) / 100;
                console.log(formatterEuro.format(divisa));
            }

    </script>
