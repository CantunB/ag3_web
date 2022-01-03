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
                    <a class="nav-link" aria-current="page" href="{{ route('index',app()->getLocale()) }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de nosotros</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-moon"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-language" data-bs-toggle="dropdown"
                        aria-expanded="false">Cambiar idioma</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-language">
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/4x3/en.svg') }}" alt="english-flag" class="flags">
                                Inglés</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/4x3/es.svg') }}" alt="spanish-flag" class="flags">
                                Español</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/flags/4x3/fr.svg') }}" alt="french-flag" class="flags">
                                Francés</a></li>
                                <language-switcher
                                locale ="{{ app()->getLocale() }}"
                                link-en ="{{ route(Route::currentRouteName(), 'en') }}"
                                link-fr ="{{ route(Route::currentRouteName(), 'fr') }}"
                                link-es ="{{ route(Route::currentRouteName(), 'es') }}"
                            ></language-switcher>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- section navbar end -->
