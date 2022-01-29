<!-- Swiper 7.4.1 -->
<link rel="stylesheet" href="{{ asset('assets/my_styles/swiper-bundle.min.css') }}">

<section class="section mt-5 testimonials">
    <div class="container">
        <div class="testimony-title">
            <h1 class="section-title text-center mb-4"><span>{{__('testimonios')}}</span></h1>
        </div>

        <div class="testimony-content mb-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="{{ asset('assets/images/testimonials/quote.png') }}" alt="quote" class="quote">
                            <div class="content">
                                <p>{{ __('testimonio_uno') }}</p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('assets/images/testimonials/testimonial1.jpg') }}" alt="testimonial-1">
                                    </div>
                                    <div class="user">
                                        <h4>Michele Fortin</h4>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>{{ __('publicado') }} 16/04/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="{{ asset('assets/images/testimonials/quote.png') }}" alt="quote" class="quote">
                            <div class="content">
                                <p>{{ __('testimonio_dos') }}</p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('assets/images/testimonials/testimonial3.jpg') }}" alt="testimonial-2">
                                    </div>
                                    <div class="user">
                                        <h4>Anna Valentina R</h4>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>{{ __('publicado') }} 20/09/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="{{ asset('assets/images/testimonials/quote.png') }}" alt="quote" class="quote">
                            <div class="content">
                                <p>{{ __('testimonio_tres') }}</p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('assets/images/testimonials/testimonial4.jpg') }}" alt="testimonial-3">
                                    </div>
                                    <div class="user">
                                        <h4>Ana Juliana</h4>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>{{ __('publicado') }} 15/11/2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="{{ asset('assets/images/testimonials/quote.png') }}" alt="quote" class="quote">
                            <div class="content">
                                <p>{{ __('testimonio_cuatro') }}</p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('assets/images/testimonials/testimonial2.jpg') }}" alt="testimonial-4">
                                    </div>
                                    <div class="user">
                                        <h4>Oskar Koruco</h4>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>{{ __('publicado') }} 21/06/2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <img src="{{ asset('assets/images/testimonials/quote.png') }}" alt="quote" class="quote">
                            <div class="content">
                                <p>{{ __('testimonio_cinco') }}</p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="{{ asset('assets/images/testimonials/testimonial5.jpg') }}" alt="testimonial-5">
                                    </div>
                                    <div class="user">
                                        <h4>Abel Fuerte</h4>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>{{ __('publicado') }} 05/01/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
