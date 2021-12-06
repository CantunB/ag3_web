{{--  <footer class="footer">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/images/footer_1.jpg') }}" data-speed="0.8">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="newsletter">
                                    <div class="newsletter_title_container text-center">
                                        <div class="newsletter_title">Subscribe to our newsletter to
                                            get the latest
                                            trends &
                                            news</div>
                                        <div class="newsletter_subtitle">Join our database NOW!
                                        </div>
                                    </div>
                                    <div class="newsletter_form_container">
                                        <form action="#"
                                            class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between"
                                            id="newsletter_form">
                                            <div
                                                class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                                <div><input type="text"
                                                        class="newsletter_input newsletter_input_name"
                                                        id="newsletter_input_name" placeholder="Name"
                                                        required="required">
                                                    <div class="input_border"></div>
                                                </div>
                                                <div><input type="email"
                                                        class="newsletter_input newsletter_input_email"
                                                        id="newsletter_input_email" placeholder="Your e-mail"
                                                        required="required">
                                                    <div class="input_border"></div>
                                                </div>
                                            </div>
                                            <div><button class="newsletter_button">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row footer_contact_row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="row">

                                    <!-- Footer Contact Item -->
                                    <div class="col-xl-4 footer_contact_col">
                                        <div
                                            class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                            <div class="footer_contact_icon"><img
                                                    src="{{ asset('assets/images/sign.svg') }}" alt="">
                                            </div>
                                            <div class="footer_contact_title">give us a call</div>
                                            <div class="footer_contact_list">
                                                <ul>
                                                    <li>Office Landline: +44 5567 32 664 567</li>
                                                    <li>Mobile: +44 5567 89 3322 332</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer Contact Item -->
                                    <div class="col-xl-4 footer_contact_col">
                                        <div
                                            class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                            <div class="footer_contact_icon"><img
                                                    src="{{ asset('assets/images/trekking.svg') }}" alt="">
                                            </div>
                                            <div class="footer_contact_title">come & drop by</div>
                                            <div class="footer_contact_list">
                                                <ul style="max-width:190px">
                                                    <li>4124 Barnes Street, Sanford, FL 32771</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer Contact Item -->
                                    <div class="col-xl-4 footer_contact_col">
                                        <div
                                            class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                            <div class="footer_contact_icon"><img
                                                    src="{{ asset('assets/images/around.svg') }}" alt="">
                                            </div>
                                            <div class="footer_contact_title">send us a message
                                            </div>
                                            <div class="footer_contact_list">
                                                <ul>
                                                    <li>youremail@gmail.com</li>
                                                    <li>Office@yourbusinessname.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
<div class="col text-center">
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script> All rights
    reserved | This template
    is made
    with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
        target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
</footer>  --}}
<footer>

    <div class="container__footer">
        <div class="box__footer">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt=""  >
            </div>
            <div class="terms">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
            </div>
        </div>
        <div class="box__footer">
            <h2>{{ __('servicios') }}</h2>
            <a href="#">{{ __('serv_sal') }}</a>
            <a href="#">{{ __('serv_lleg') }}</a>
            <a href="#">{{ __('serv_tou') }}</a>
            <a href="#">{{ __('serv_abi') }}</a>
        </div>

        {{-- <div class="box__footer">
            <h2>Compañia</h2>
            <a href="about">Acerca de</a>
            <a href="services">Servicios</a>
        </div> --}}

        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

    </div>

    <div class="box__copyright">
        <hr>
        <p>Todos los derechos reservados © 2021 <b>StigmaCode</b></p>
    </div>
</footer>
