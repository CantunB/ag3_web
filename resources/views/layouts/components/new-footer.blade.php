 <!-- section footer start -->
 <div class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 mt-2 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="my-2 logo">
                <p>AG3 VIP Luxury es una empresa lider en el transporte de lujo, con vehiculos equipados para cada ocasion o la necesidad que tengas</p>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3>Servicios</h3>
                <div class="d-flex flex-column">
                    <a href="#">Aeropuerto a hotel</a>
                    <a href="#">Hotel a aeropuerto</a>
                    <a href="#">Hotel a hotel</a>
                    <a href="#">Aeropuerto a hotel a aeropuerto</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3>Compañia</h3>
                <div class="d-flex flex-column">
                    <a href="#">Inicio</a>
                    <a href="#">Acerca de</a>
                    <a href="#">Contacto</a>
                    <a href="{{route('terms', app()->getLocale())}}">Terminos y condiciones</a>
                    <a href="#">Aviso de privacidad</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-2">
                <h3>Siguenos</h3>
                <div class="d-flex flex-column">
                    <a href="https://www.facebook.com/transfercancun/" target="blank"><i class="face fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://www.instagram.com/ag3_luxurytravel/" target="blank"><i class="insta fab fa-instagram"></i> Instagram</a>
                    <a href="https://twitter.com/eulloagle/" target="blank"><i class="twit fab fa-twitter"></i> Twitter</a>
                    <a href="https://api.whatsapp.com/send?phone=5219381726488" target="blank"><i class="whats fab fa-whatsapp"></i> Whatsapp</a>
                </div>
            </div>
            <div class="col-12 mt-2 copyright">
                <h6 class="text-center mt-2">Creado por <a href="https://www.stigmacode.com/">StigmaCode</a> & <span>JS Arthuro</span> | Todos los derechos reservados © {{ now()->year }}</h6>
            </div>
        </div>
    </div>
</div>
</div>
<!-- section footer end -->
