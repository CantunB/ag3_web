   <!-- Mis estilos para home -->
   <link rel="stylesheet" href="{{ asset('css/home.css') }}">

   <!-- font-awesome v4.7.0 -->
   <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">

   <!-- Select2 v4.0.13 -->
   <link rel="stylesheet" href="{{ asset('assets/my_styles/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/my_styles/select2-bootstrap-5-theme.min.css') }}">

   <!-- Flatpickr  -->
   <link rel="stylesheet" href="{{ asset('assets/my_styles/flatpickr.min.css') }}">

   <!-- Spiner input -->
   <link rel="stylesheet" href="{{ asset('css/spiner.css') }}">


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
                            <a class="nav-link" aria-current="page" href="{{ route('index',app()->getLocale()) }}">{{__('inicio')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">{{__('acerca')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('servicios')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tours">{{__('tours')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">{{__('galeria')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">{{__('contacto')}}</a>
                        </li>
                    </ul>
                    <!-- section-right-language  -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown m-2">
                            <language-switcher
                            locale ="{{ app()->getLocale() }}"
                            link-en ="{{ route(Route::currentRouteName(), 'en') }}"
                            link-fr ="{{ route(Route::currentRouteName(), 'fr') }}"
                            link-es ="{{ route(Route::currentRouteName(), 'es') }}"
                        ></language-switcher>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <button class="switch">
                                <span><i class="fas fa-sun"></i></span>
                                <span><i class="fas fa-moon"></i></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

       <div class="container home">
           <h1 class="text-center title-home one demo">{{__('title_home')}}</h1>
           <h1 class="text-center title-home second">Te ofrecemos <span class="typed"></span></h1>
       </div>
   </header>

   <div class="container col-md-4 offset-md-4 mb-0 search_title">
       <h5 class="text-center">{{__('iniciar_busqueda')}}</h5>
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
                            <option selected value="" disabled>{{__('Selecciona un servicio')}}</option>
                            <optgroup label="{{__('Viaje redondo')}}">
                                <option value="4">{{__('Aeropuerto a Hotel a Aeropuerto')}}</option>
                            </optgroup>
                            <optgroup label="{{__('Viaje sencillo')}}">
                                <option value="1">{{__('Aeropuerto a Hotel')}}</option>
                                <option value="2">{{__('Hotel a Aeropuerto')}}</option>
                                <option value="3">{{__('Hotel a Hotel')}}</option>
                                <option value="5">{{__('Traslado')}}</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                {{-- origen aeropuerto --}}
                <div class="col-lg-3 mb-2" id="origen_default">
                    <div class="input-group ">
                        <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                        <input type="text" readonly="readonly" id="origen_input_default"  class="form-control search_input_hotel" name="origen"
                            value="Aeropuerto Internacional de Cancun">
                    </div>
                </div>


                {{-- destino aeropuerto --}}
                <div class="col-lg-3 mb-2" id="destino_default">
                    <div class="input-group ">
                        <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                        <input type="text" readonly="readonly" id="destino_input_default" class="form-control search_input_hotel" name="destino"
                            value="Aeropuerto Internacional de Cancun">
                    </div>
                </div>


                {{-- origen hotel --}}
                <div class="col-lg-3 mb-2" id="origen_hotel">
                    <div class="input-group ">
                        <span class="input-group-text"><i class="fas fa-hotel"></i></span>

                        <select class="form-select search_input search_input_hotel origen_hotel_select" name="origen">
                            <option selected value="null" disabled> {{__('Hotel origen')}} </option>
                            @foreach ($hoteles as $hotel)
                                <option>{{ $hotel->hotel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

               {{-- destino hotel --}}
               <div class="col-lg-3 mb-2" id="destino_hotel">
                   <div class="input-group ">
                       <span class="input-group-text"><i class="fas fa-hotel"></i></span>

                       <select class="form-select search_input search_input_hotel destino_hotel_select" name="destino">
                           <option selected value="null" disabled>{{__('Hotel destino')}}</option>
                           @foreach ($hoteles as $hotel)
                               <option>{{ $hotel->hotel }}</option>
                           @endforeach
                       </select>
                   </div>
               </div>

               {{-- fecha --}}
               <div class="col-lg-2 mb-2" id="date-content">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-date"><i class="fas fa-calendar-alt"></i></span>
                       <input style="background: #FFFFFF;" type="text" class="form-control search_input_3 selector" aria-describedby="icon-date"
                           placeholder="{{ __('fecha') }}" name="date" id="date_arrival" required>
                   </div>
               </div>

               {{-- hora --}}
               <div class="col-lg-2 mb-2" id="time-content">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-time"><i class="fas fa-clock"></i></span>
                       <input type="time" class="form-control search_input_3 " aria-describedby="icon-time"
                           placeholder="{{ __('hora') }}" name="pickup" id="time_arrival" required>
                   </div>
               </div>

               {{-- numero de pasajeros --}}
               <div class="col-lg-2 mb-2" id="passengers-content">
                   <div class="input-group">
                       <span class="input-group-text" id="icon-passenger"><i class="fas fa-users"></i></span>
                       {{-- <input type="text" class="form-control" aria-describedby="icon-passenger"
                           placeholder="{{ __('pasajeros') }}" name="passengers" required> --}}
                        <div class="num-block skin-5">
                            <div class="num-in">
                                <span class="minus dis">-</span>
                                <input type="text" class="in-num" value="1" aria-describedby="icon-passenger" required placeholder="{{ __('pasajeros') }}" name="passengers" readonly="">
                                <span class="plus">+</span>
                            </div>
                        </div>
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
                       <input type="time" class="form-control" aria-describedby="icon-time_comeback"
                           placeholder="{{ __('Hora de regreso') }}" name="time_comeback" style="background: #FFFFFF;">
                   </div>
               </div>

               {{-- buscar --}}
               <div class="d-grid col-lg-2 mb-2" id="button-search">
                   <button type="submit" class="btn button-search"><i class="fas fa-search"></i>
                       {{ __('buscar') }}</button>
               </div>
           </form>
       </div>
   </div>
