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
{{---------------------------------Bootstrap v5.0.2---------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/bootstrap.min.js') }}"></script>

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

{{------------------------------ Dark Mode --------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/dark-mode.js') }}"></script>

{{-------------------------------Gallery-------------------------------------------}}
    <script src="{{ asset('assets/js/scripts/gallery.js') }}"></script>

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
        $(".selector").flatpickr({
                minDate: "today",
                dateFormat: "d-m-Y",
            });
        $(".timer").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
        });
    </script>
{{--------------------------  TODO[paypal]PAYPAL  -----------------------------------------}}
    {{----------------  SECTION[sandbox] Actualmente se opera con sandbox  ------------}}
    <script src="https://www.paypal.com/sdk/js?client-id=AYh6SsC21DLPKSQlkxE4XEPxcTq6-UDo_S6xtbD0Q3l2FH1EUEoTkvPbx0YC0NWktEm1NqjhR2FhxHCT&components=buttons&currency=MXN&locale=es_MX"></script>



{{---------------------  TODO TARIFAS PRESENTADAS DEPENDIENDO EL TIPO DE SERVICIO ELEGIDO  --------------------------}}
    <script src="{{ asset('assets/js/service_show.js') }}"></script>

{{---------------------  TODO NOMBRE COMPLETO AUTOCOMPLETE   --------------------------}}
    <script src="{{ asset('assets/js/autocomplete_name.js') }}"></script>

{{---------------------  TODO COUNTRY STATE DROPDOWN DEPENDENT--------------------------}}
    <script src="{{ asset('assets/js/country_state.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/booking.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/method_payment.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/arrivo.js') }}"></script>

{{---------------------  TODO --------------------------}}
    <script src="{{ asset('assets/js/paypal.js') }}"></script>
