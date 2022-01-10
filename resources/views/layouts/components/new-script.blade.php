<!-- Bootstrap v5.0.2 -->
<script src="{{ asset('assets/js/scripts/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts/bootstrap.min.js') }}"></script>

<!-- Typed.js v2.0.12 -->
<script src="{{ asset('assets/js/scripts/typed.js') }}"></script>

<!-- Main.js  -->
<script src="{{ asset('assets/js/scripts/main.js') }}"></script>

<!-- jQuery v3.6.0 -->
<script src="{{ asset('assets/js/scripts/jquery.min.js') }}"></script>

<!-- Select2 v4.0.13 -->
<script src="{{ asset('assets/js/scripts/select2.full.min.js') }}"></script>

{{-- kit fontawesome --}}
<script src="{{ asset('assets/js/scripts/41bcea2ae3.js') }}"></script>

<!-- flatpickr v4.6.9 -->
<script src="{{ asset('assets/js/scripts/flatpickr.js') }}"></script>

{{-- Dark Mode --}}
<script src="{{ asset('assets/js/scripts/dark-mode.js') }}"></script>

{{-- Gallery --}}
<script src="{{ asset('assets/js/scripts/gallery.js') }}"></script>

{{-- Testimonials --}}
<script src="{{ asset('assets/js/scripts/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts/testimonials.js') }}"></script>


<!-- ParsleyJS Validation -->
<script src="{{ asset('assets/js/parsley.min.js') }}"></script>
<script src="{{ asset('assets/js/i18n/es.js') }}"></script>
<script src="{{ asset('assets/js/i18n/fr.js') }}"></script>
<script type="text/javascript">
    window.onload = function () {
        //var parsley_lang = navigator.language || navigator.userLanguage;
        var locale =  "{{ app()->getLocale() }}";
        if (locale == 'es') {
            window.ParsleyValidator.setLocale('es');
        }else if (locale == 'en') {
            window.ParsleyValidator.setLocale('en');
        }else if (locale == 'fr') {
            window.ParsleyValidator.setLocale('fr');
        }
    }
</script>

<!-- SWEETALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Contact Form -->
<script src="{{ asset('assets/js/contact.js') }}"></script>

<<<<<<< Updated upstream
=======
<!-- Selects-->
<script src="{{ asset('assets/js/selects.js') }}"></script>

<!-- Search Form -->
<script src="{{ asset('assets/js/search.js') }}"></script>
>>>>>>> Stashed changes
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



