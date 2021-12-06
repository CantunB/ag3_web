<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.components.css')
</head>
    <body>
        <div id="app" class="super_container">
            @include('layouts.components.header')
            <div class="home">
                <!-- Home Slider -->
                <div class="home_slider_container">
                    <div class="owl-carousel owl-theme home_slider">
                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/chevrolet_suburban.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/cancun.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="owl-item">
                            <div class="background_image"
                                style="background-image:url({{ asset('assets/images/home_slider.jpg') }})"></div>
                            <div class="home_slider_content_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="home_slider_content">
                                                <div class="home_title">
                                                    <h2>{{ __('title_home') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="home_page_nav">
                        <ul class="d-flex flex-column align-items-end justify-content-end">
                            <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                            <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                            <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search -->

            @include('layouts.components.searcher')

            <!-- Intro -->

            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro_container">
                                <div class="row">
                                    <!-- Intro Item -->
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="{{ asset('assets/images/beach.svg') }}" alt=""></div>
                                            <div class="intro_content">
                                                <div class="intro_title">Top Destinations</div>
                                                <div class="intro_subtitle">
                                                    <p>Nulla pretium tincidunt felis, nec.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="{{ asset('assets/images/wallet.svg') }}" alt="">
                                            </div>
                                            <div class="intro_content">
                                                <div class="intro_title">The Best Prices</div>
                                                <div class="intro_subtitle">
                                                    <p>Sollicitudin mauris lobortis in.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 intro_col">
                                        <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                            <div class="intro_icon"><img src="{{ asset('assets/images/wallet.svg') }}" alt="">
                                            </div>
                                            <div class="intro_content">
                                                <div class="intro_title">The Best Prices</div>
                                                <div class="intro_subtitle">
                                                    <p>Sollicitudin mauris lobortis in.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destinations -->

            <div class="destinations" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_subtitle">simply amazing places</div>
                            <div class="section_title">
                                <h2>Popular Destinations</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row destinations_row">
                        <div class="col">
                            <div class="destinations_container item_grid">


                                <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{{ asset('assets/images/destination_4.jpg') }}" alt="image">
                                        <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Mumbai</a>
                                        </div>
                                        <div class="destination_subtitle">
                                            <p>The city never sleeps </p>
                                        </div>
                                        <div class="destination_price">From $1000</div>
                                    </div>
                                </div>
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{{ asset('assets/images/destination_1.jpg') }}" alt="image">
                                        <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Dhaka</a>
                                        </div>
                                        <div class="destination_subtitle">
                                            <p>Biggest City </p>
                                        </div>
                                        <div class="destination_price">From $650</div>
                                    </div>
                                </div>
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{{ asset('assets/images/destination_3.jpg') }}" alt="image">
                                        <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="destinations.html">Kolkata</a>
                                        </div>
                                        <div class="destination_subtitle">
                                            <p>Garden City </p>
                                        </div>
                                        <div class="destination_price">From $100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->

            <div class="contact" id="testimonials">
                <div class="parallax_background parallax-window" data-parallax="scroll"
                    data-image-src="{{ asset('assets/images/testimonials.jpg') }}" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="section_subtitle">simply amazing places</div>
                            <div class="section_title">
                                <h2>Testimonials</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonials_row">
                        <div class="col">

                            <!-- Testimonials Slider -->
                            <div class="testimonials_slider_container">
                                <div class="owl-carousel owl-theme testimonials_slider">

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur
                                            quis vehicula
                                            odio.</div>
                                        <div class="testimonial_author">
                                            <div
                                                class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur
                                            quis vehicula
                                            odio.</div>
                                        <div class="testimonial_author">
                                            <div
                                                class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item text-center">
                                        <div class="testimonial">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit.
                                            lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur
                                            quis vehicula
                                            odio.</div>
                                        <div class="testimonial_author">
                                            <div
                                                class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                                <div>john turner,</div>
                                                <div>client</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test_nav">
                    <ul class="d-flex flex-column align-items-end justify-content-end">
                        <li><a href="#">City Breaks Clients<span>01</span></a></li>
                        <li><a href="#">Cruises Clients<span>02</span></a></li>
                        <li><a href="#">All Inclusive Clients<span>03</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="news" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="news_container">

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="{{ asset('assets/images/news_1.jpg') }}" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>02</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a>
                                        </div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget,
                                                tristique at
                                                leo. Vivamus massa.Tempor massa et laoreet.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="{{ asset('assets/images/news_2.jpg') }}" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>01</div>
                                            <div>june</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a>
                                        </div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Tempor massa et laoreet malesuada. Pellentesque sit amet
                                                elementum ccumsan
                                                sit amet mattis eget, tristique at leo.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- News Post -->
                                <div
                                    class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                    <div class="news_post_image"><img src="{{ asset('assets/images/news_3.jpg') }}" alt=""></div>
                                    <div class="news_post_content">
                                        <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                            <div>29</div>
                                            <div>may</div>
                                        </div>
                                        <div class="news_post_title"><a href="#">Best tips to travel light</a>
                                        </div>
                                        <div class="news_post_category">
                                            <ul>
                                                <li><a href="#">lifestyle & travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="news_post_text">
                                            <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla
                                                nisl, accumsan
                                                sit amet mattis.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- News Sidebar -->
                        <div class="col-xl-4">
                            <div class="travello">
                                <div class="background_image"
                                    style="background-image:url({{ asset('assets/images/travello.jpg') }})"></div>
                                <div class="travello_content">
                                    <div class="travello_content_inner">
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="travello_container">
                                    <a href="#">
                                        <div class="d-flex flex-column align-items-center justify-content-end">
                                            <span class="travello_title">Get a 20% Discount</span>
                                            <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" id="contact" style="color: #F1C40F">
                <section class="mb-4">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">{{ __('contactanos') }}</h2>
                    <p class="text-center w-responsive mx-auto mb-5">{{ __('text_contact') }}</p>
                    <div class="row">
                        <div  class="col-md-2 mb-md-0 mb-5 text-center">
                            <img style="width: 200px; " src="{{ asset('assets/images/icons/undraw_mail_re_duel.svg') }}">
                        </div>
                        <div class="col-md-8 mb-md-0 mb-5">
                            <form id="contact_form" name="contact-form" action="{{ route('email.contact') }}" method="POST"  data-parsley-validate>
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
                                    <p>ag3luxurytravel@mdbootstrap.com</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </section>
            </div>
            <br>
            <br>
            @include('layouts.components.footer')
        </div>
        @include('layouts.components.script')
    </body>
</html>
