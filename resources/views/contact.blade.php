
<div class="container" id="contact" style="color: #F1C40F">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">{{ __('contactanos') }}</h2>
        <p class="text-center w-responsive mx-auto mb-5">{{ __('text_contact') }}</p>
        <div class="row">
            <div  class="col-md-2 mb-md-0 mb-5 text-center">
                <img style="width: 200px; " src="{{ asset('assets/images/icons/undraw_mail_re_duel.svg') }}">
            </div>
            <div class="col-md-8 mb-md-0 mb-5">
                <form id="contact_form" name="contact-form" action="{{ route('email.contact', app()->getLocale()) }}" method="POST"  data-parsley-validate>
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <label style="color: black" for="name" class=""><h6>{{ __('fullname') }}</h6></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <label style="color: black" for="email" class=""><h6>{{ __('correo') }}</h6></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <label style="color: black" for="phone" class=""><h6>{{ __('telefono') }}</h6></label>
                                <input type="text" data-parsley-type="digits" id="phone" name="phone" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label style="color: black" for="name" class=""><h6>{{ __('asunto') }}</h6></label>
                                <input type="text" id="subject" name="subject" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label style="color: black" for="name" class=""><h6>{{ __('mensaje') }}</h6></label>
                                <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea" required></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2 text-center text-md-rigth">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
                <div class="status"></div>
            </div>

            <div class="col-md-2 mb-md-0 mb-5 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p><a href="tel:9381726488">Call us: +52 9381726488</a> </p>
                    </li>
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contacto@ag3luxurytravel.com</p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
</div>
