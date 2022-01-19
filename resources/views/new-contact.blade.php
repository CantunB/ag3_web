<section class="section mt-2 contact-form" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-title text-center mb-4"><span>Contactanos</span></h1>
            </div>
        </div>
        <div class="row contact-content mb-4">
            <div class="col-lg-6" id="map_div">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238194.00038911213!2d-86.98932253089137!3d21.121285333245872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bf006f7ee49%3A0x1f5d2ee85a46e08e!2sAg3%20Luxury%20Travel!5e0!3m2!1ses!2smx!4v1641503739058!5m2!1ses!2smx"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-6" id="contact">
                <p class="description mt-2">¿Tiene usted alguna pregunta? No dude en contactarnos directamente. Nuestro
                    equipo se pondra en contacto contigo en cuestion de horas para ayudarte.</p>
                <form class="row" id="contact_form" name="contact-form" method="POST" data-parsley-validate>
                    <input type="hidden" id="contact_url" url="{{ route('contact', app()->getLocale()) }}" />
                    @csrf
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control" aria-describedby="validationName" id="name"
                            name="name" placeholder="&#xf007; Nombre Completo" required>
                        {{--is-invalid <div id="validationName" class="invalid-feedback">
                            El nombre completo es requerido.
                        </div> --}}
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="email" class="form-control" aria-describedby="validationEmail"
                            id="email" name="email" placeholder="&#xf0e0; Correo Electronico" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" aria-describedby="validationPhone" data-parsley-type="digits" id="phone" name="phone"
                            placeholder="&#xf879; Telefono" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control" aria-describedby="validationSubject" id="subject" name="subject"
                            placeholder="&#xf08d; Asunto" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <textarea class="form-control" aria-describedby="validationContent" id="content" name="content" rows="3"
                            placeholder="Escribe aqui tu mensaje..." required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-contact"><i class="fas fa-paper-plane"></i> Enviar
                            mensaje</button>
                    </div>
                </form>

                <div class="row mt-4 widget-contact">
                    <div class="col-md-3 text-center">
                        <i class="fas fa-map-marker-alt ubication"></i>
                        <p>Cancun, MXN</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-phone cell-phone"></i>
                        <p><a href="tel:9381726488">938-137-8856</a></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fas fa-envelope email"></i>
                        <p>contacto@ag3luxurytravel.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
