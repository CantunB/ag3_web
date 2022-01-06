   <!-- Mis estilos para home -->
   <link rel="stylesheet" href="{{ asset('css/home.css') }}">

   <!-- font-awesome v4.7.0 -->
   <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">

   <!-- Select2 v4.0.13 -->
   <link rel="stylesheet" href="{{ asset('assets/my_styles/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/my_styles/select2-bootstrap-5-theme.min.css') }}">

   <!-- Flatpickr  -->
   <link rel="stylesheet" href="{{ asset('assets/my_styles/flatpickr.min.css') }}">

   <header class="header">
       <nav class="navbar navbar-expand-lg bg-dark" aria-label="navbar-ag3">
           <div class="container">
               <!-- Navbar-brand -->
               <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                       class="navbar-brand__img"></a>
               <!-- Button collapse  -->
               <button id="foo" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#contenido-nav" aria-controls="contenido-nav" aria-expanded="false"
                   aria-label="Toggle navigation">
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
                       <li class="nav-item d-flex align-items-center">
                           <button class="switch">
                               <span><i class="fas fa-sun"></i></span>
                               <span><i class="fas fa-moon"></i></span>
                           </button>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="dropdown-language" data-bs-toggle="dropdown"
                               aria-expanded="false">Cambiar idioma</a>
                           <ul class="dropdown-menu" aria-labelledby="dropdown-language">
                               <li><a class="dropdown-item" href="#"><img
                                           src="{{ asset('assets/images/flags/4x3/en.svg') }}" alt="english-flag"
                                           class="flags">
                                       Inglés</a></li>
                               <li><a class="dropdown-item" href="#"><img
                                           src="{{ asset('assets/images/flags/4x3/es.svg') }}" alt="spanish-flag"
                                           class="flags">
                                       Español</a></li>
                               <li><a class="dropdown-item" href="#"><img
                                           src="{{ asset('assets/images/flags/4x3/fr.svg') }}" alt="french-flag"
                                           class="flags">
                                       Francés</a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>

       <div class="container home">
           <h1 class="text-center title-home demo">Del Aeropuerto a tu Destino</h1>
           <h1 class="text-center title-home">Te ofrecemos <span class="typed"></span></h1>
       </div>
   </header>

   <div class="container col-md-4 offset-md-4 mb-0 search_title">
       <h5 class="text-center">Empieza la busqueda</h5>
   </div>

   <div class="container search">
       <div class="search_content">
           <form class="row my-2" action="{{ route('vehicles', app()->getLocale()) }}" method="POST"
               id="form_search" autocomplete="off">
               @csrf
               @method('POST')

               {{-- selecciona el servicio --}}
               <div class="col-lg-4 mb-2" id="services-content">
                   <div class="input-group">
                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-sync-alt"></i></span>
                       <select class="form-select" name="services" id="services" required>
                           <option selected value="null" disabled>Selecciona un servicio</option>
                           <optgroup label="VIAJE REDONDO">
                               <option value="4">Aeropuerto a Hotel a Aeropuerto</option>
                           </optgroup>
                           <optgroup label="VIAJE SENCILLO">
                               <option value="1">Aeropuerto a Hotel</option>
                               <option value="2">Hotel a Aeropuerto</option>
                               <option value="3">Hotel a Hotel</option>
                               <option value="5">Traslado</option>
                           </optgroup>
                       </select>
                   </div>
               </div>

               {{-- origen aeropuerto --}}
               <input type="hidden" readonly class="search_input_hotel origen_airline" name="origen"
                   value="Aeropuerto Internacional de Cancun">

               {{-- origen hotel --}}
               <div class="col-lg-3 mb-2 origen_hotel">
                   <div class="input-group ">
                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-hotel"></i></span>

                       <select class="form-select search_input search_input_hotel origen_hotel_select" name="origen">
                           <option selected value="null" disabled>Selecciona un origen_hotel</option>
                           @foreach ($hoteles as $hotel)
                               <option>{{ $hotel->hotel }}</option>
                           @endforeach
                       </select>
                   </div>
               </div>

               {{-- destino hotel --}}
               <div class="col-lg-3 mb-2 destino_hotel">
                   <div class="input-group ">
                       <span class="input-group-text dos" id="basic-addon1"><i class="fas fa-hotel"></i></span>

                       <select class="form-select search_input search_input_hotel destino_hotel_select" name="destino">
                           <option selected value="null" disabled>Selecciona un destino_hotel</option>
                           @foreach ($hoteles as $hotel)
                               <option>{{ $hotel->hotel }}</option>
                           @endforeach
                       </select>
                   </div>
               </div>

               {{-- destino aeropuerto --}}
               <input type="hidden" readonly class="search_input_hotel destino_airline" name="destino"
                   value="Aeropuerto Internacional de Cancun">



               {{-- fecha --}}
               <div class="col-lg-2 mb-2" id="date-content">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-date"><i class="fas fa-calendar-alt"></i></span>
                       <input type="text" class="form-control search_input_3 selector" aria-describedby="icon-date"
                           placeholder="{{ __('fecha') }}" name="date" id="date" required>
                   </div>
               </div>

               {{-- hora --}}
               <div class="col-lg-2 mb-2">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-time"><i class="fas fa-clock"></i></span>
                       <input type="time" class="form-control search_input_3 " aria-describedby="icon-time"
                           placeholder="{{ __('hora') }}" name="pickup" id="pickup" required>
                   </div>
               </div>

               {{-- numero de pasajeros --}}
               <div class="col-lg-2 mb-2" id="passengers-content">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-passenger"><i class="fas fa-users"></i></span>
                       <input type="text" class="form-control" aria-describedby="icon-passenger"
                           placeholder="{{ __('pasajeros') }}" name="passengers" required>
                   </div>
               </div>

               <input onclick="return false;" class="form-check-input checkmark" type="checkbox" name="retorno"
                   id="retorno" value="si" style="display: none">

               {{-- <label class="search_input_text form-check-label" for="retorno">&nbsp; Selecciona la fecha y hora de regreso</label> --}}

               {{-- fecha de regreso --}}
               <div class="col-lg-2 mb-2" id="date_comeback">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-date_comeback"><i class="fas fa-calendar-alt"></i></span>
                       <input type="hidden" class="form-control selector" aria-describedby="icon-date_comeback"
                           placeholder="{{ __('Fecha de regreso') }}" name="date_comeback" style="background: #FFFFFF;">
                   </div>
               </div>

               {{-- hora de regreso --}}
               <div class="col-lg-2 mb-2" id="time_comeback">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-time_comeback"><i class="fas fa-clock"></i></span>
                       <input type="hidden" class="form-control timer" aria-describedby="icon-time_comeback"
                           placeholder="{{ __('Hora de regreso') }}" name="time_comeback" style="background: #FFFFFF;">
                   </div>
               </div>

               {{-- buscar --}}
               <div class="d-grid col-lg-2 mb-2" id="search-content">
                   <button type="submit" class="btn button-search"><i class="fas fa-search"></i>
                       {{ __('buscar') }}</button>
               </div>
           </form>
       </div>
   </div>
