<!-- section navbar start -->
<nav class="navbar navbar-expand-lg bg-dark" aria-label="navbar-ag3">
    <div class="container">
        <!-- Navbar-brand -->
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="navbar-brand__img"></a>
        <!-- Button collapse  -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contenido-nav"
            aria-controls="contenido-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav-content -->
        <div class="collapse navbar-collapse" id="contenido-nav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('index',app()->getLocale()) }}">{{__('inicio')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('acerca')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>

            </ul>
            <!-- section-right-language  -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center">
                    <button class="switch">
                        <span><i class="fas fa-sun"></i></span>
                        <span><i class="fas fa-moon"></i></span>
                    </button>
                </li>
                <li class="nav-item dropdown">
                    {{-- <language-switcher
                    locale ="{{ app()->getLocale() }}"
                    link-en ="{{ route(Route::currentRouteName(), 'en') }}"
                    link-fr ="{{ route(Route::currentRouteName(), 'fr') }}"
                    link-es ="{{ route(Route::currentRouteName(), 'es') }}"
                ></language-switcher> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- section navbar end -->
