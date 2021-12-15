
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="images" style="width: 100px; heigth: 100px;">
                        </div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li class="active"><a href="#index">{{ __('inicio') }}</a></li>
                                {{-- <li><a href="{{ route('reservation', app()->getLocale()) }}">{{ __('reservacion') }}</a></li> --}}
                                <li><a href="#about">{{ __('acerca') }}</a></li>
                                <li><a href="#services">{{ __('servicios') }}</a></li>
                                <li><a href="#contact">{{ __('contacto') }}</a></li>
                                <li>
                                    <language-switcher
                                        locale ="{{ app()->getLocale() }}"
                                        link-en ="{{ route(Route::currentRouteName(), 'en') }}"
                                        link-fr ="{{ route(Route::currentRouteName(), 'fr') }}"
                                        link-es ="{{ route(Route::currentRouteName(), 'es') }}"
                                    ></language-switcher>
                                </li>
                            </ul>
                        </nav>
                        {{-- <div class="header_phone ml-auto">Call us: 00-56 445 678 33</div> --}}

                        <!-- Hamburger -->

                        <div class="hamburger ml-auto">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_social d-flex flex-row align-items-center justify-content-start">
        <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</header>
<div class="menu">
    <div class="menu_header d-flex flex-row align-items-center justify-content-start">
        <div class="menu_logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="images" style="width: 100px; heigth: 100px;">

            {{-- <a href="index.html">{{ config('app.name', 'Laravel') }}</a> --}}

        </div>
        <div class="menu_close_container ml-auto">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="menu_content">
        <ul>
            <li><a href="#index">{{ __('inicio') }}</a></li>
            {{-- <li><a href="{{ route('reservation', app()->getLocale()) }}">{{ __('reservacion') }}</li> --}}
            <li><a href="#about">{{ __('acerca') }}</a></li>
            <li><a href="#services">{{ __('servicios') }}</a></li>
            <li><a href="#contact">{{ __('contacto') }}</a></li>
            <li>
                <language-switcher
            locale ="{{ app()->getLocale() }}"
            link-en ="{{ route(Route::currentRouteName(), 'en') }}"
            link-fr ="{{ route(Route::currentRouteName(), 'fr') }}"
            link-es ="{{ route(Route::currentRouteName(), 'es') }}"
        ></language-switcher>
            </li>
        </ul>
    </div>
    <div class="menu_social">

        <div class="menu_phone ml-auto"><a href="tel:9381726488">Call us: 9381726488</a> </div>
        <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

        </ul>
    </div>
</div>
