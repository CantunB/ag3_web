 <!-- section footer start -->
 <div class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 mt-2 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="my-2 logo">
                <p> {{__('texto footer')}} </p>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3> {{__('servicios')}} </h3>
                <div class="d-flex flex-column">
                    <a href="#">{{__('Aeropuerto a Hotel')}}</a>
                    <a href="#"> {{__('Hotel a Aeropuerto')}} </a>
                    <a href="#"> {{__('Hotel a Hotel')}} </a>
                    <a href="#">{{ __('Aeropuerto a Hotel a Aeropuerto') }}</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3> {{__('compañia')}} </h3>
                <div class="d-flex flex-column">
                    <a href="#"> {{__('inicio')}} </a>
                    <a href="#"> {{__('acerca')}} </a>
                    <a href="#"> {{__('contacto')}} </a>
                    <a href="{{route('terms', app()->getLocale())}}"> {{__('Terms of Service')}} </a>
                    {{-- <a href="#">Aviso de privacidad</a> --}}
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3> {{__('siguenos')}} </h3>
                <div class="d-flex flex-column">
                    <a href="https://www.facebook.com/transfercancun/" target="blank"><i class="face fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://www.instagram.com/ag3_luxurytravel/" target="blank"><i class="insta fab fa-instagram"></i> Instagram</a>
                    <a href="https://twitter.com/eulloagle/" target="blank"><i class="twit fab fa-twitter"></i> Twitter</a>
                    <a href="https://api.whatsapp.com/send?phone=5219381726488" target="blank"><i class="whats fab fa-whatsapp"></i> Whatsapp</a>
                </div>
            </div>
            <div class="col-12 mt-2 copyright">
                <h6 class="text-center mt-2">{{__('Creado por')}} <a href="https://www.stigmacode.com/">StigmaCode</a> & <span>JS Arthuro</span> | {{__('derechos reservados')}} © {{ now()->year }}</h6>
            </div>
        </div>
    </div>
</div>
</div>
<!-- section footer end -->
