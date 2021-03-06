<div class="container">
    <div class="row">
        <!-- section left start -->
        <div class="col-md-12 col-lg-8 mt-4">
            {{-- <div class="row"> --}}
            <a class="mb-2 back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>
            <br>
            <br>

            {{-- </div> --}}
            <form id="quotes_form" method="POST"  onsubmit="return validarForm();">
            {{-- <form id="quotes_form" method="POST" action="{{ route('quotes',app()->getLocale())}}"> --}}
                @csrf
                <!-- customer information start  -->
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">01</small> {{__('informacion cliente')}}</h5>
                    <div class="col-sm-4 col-md-4 mb-1">
                        <label for="name" class="form-label">{{__('nombre')}}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3" required type="text" class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label"> {{__('apellido paterno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3" required type="text" class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label"> {{__('apellido materno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3"  type="text" class="form-control" id="materno" name="materno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-1">
                        <label for="phone-number" class="form-label"> {{__('telefono')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-phone"><i
                                    class="fas fa-phone input__icon"></i></span>
                            <input required type="tel" data-parsley-type="digits"  id="phone" name="phone" class="form-control" aria-describedby="icon-phone">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="email" class="form-label"> {{__('correo electronico')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-email"><i
                                    class="fas fa-envelope input__icon"></i></span>
                            <input required type="text" class="form-control" id="email" name="email" aria-describedby="icon-email">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="countries" class="form-label"> {{__('pais')}} </label>
                        <div class="input-group">
                            <label for="icon-globe" class="input-group-text"><i
                                    class="fas fa-globe-americas input__icon"></i></label>
                            <select required id="countries" name="country_id" class="form-select countries">
                                <option selected value="null" disabled> {{__('selecciona un pais')}} </option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-4">
                        <label for="states" class="form-label">{{__('estado')}}</label>
                        <div class="input-group">
                            <label for="icon-state" class="input-group-text"><i class="fas fa-location-arrow input__icon"></i></label>
                            <select required id="states" name="state_id" class="form-select states">
                                <option selected value="null" disabled> {{__('selecciona un estado')}} </option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" readonly name="type_service" value="{{ $booking['service'] }}">
                    <input type="hidden" readonly name="origin" value="{{ $booking['origen'] }}">
                    <input type="hidden" readonly name="destiny" value="{{ $booking['destino'] }}">
                    <input type="hidden" readonly name="date_service" value="{{ $booking['date'] }}">
                    <input type="hidden" readonly name="time_service" value="{{ $booking['pickup'] }}">
                    <input type="hidden" readonly name="passengers" value="{{ $booking['passengers'] }}">
                    <input type="hidden" readonly id="request_unit" name="request_unit">
                    <input type="hidden" readonly id="type_trip" name="type_trip">

                </div>
                <div class="row mb-4">
                    <button type="submit" class="btn btn-success" id="btnBookingQuotes" >{{__('cotizar')}}</button>
                    <p class="terms mt-2">{{__('Al hacer clic en el boton estas aceptando los')}} <a href="{{route('terms', app()->getLocale())}} ">{{__('terminos y condiciones')}} </a>.</p>
                </div>

            </form>
        </div>
        <!-- section left end -->

        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">{{__('resumen')}}</h5>
                    <p class="title mb-0"> {{__('tipo_servicio')}} </p>
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $booking['service'] }}</p>
                    <p class="title mb-0">{{__('desde')}}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['origen'] }}
                    </p>
                    <p class="title mb-0">{{__('hacia')}}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['destino'] }}
                    </p>
                    <p class="title mb-0">{{__('fecha')}}</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date'] }}</p>
                    <p class="title mb-0">{{__('hora')}}</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['pickup'] }}</p>
                    <p class="title mb-0"> {{__('pasajeros')}} </p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> {{ $booking['passengers'] }}</p>
                    <p class="title mb-0"> {{__('servicios')}} </p>
                    <p class="description" id="select_service"><i class="fas fa-shuttle-van icon-resume"></i></p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{__('widget_uno')}}</h5>
                    <p>{{__('widget_text')}}</p>
                    <hr>
                    <p class="text-phone">{{__('widget_cont')}}: +52 998 523 7742</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{__('widget_dos')}}</h5>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_uno')}}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_dos')}}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_tres')}}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_cuatro')}}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_cinco')}}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_seis')}}</p>
                    <p class="mb-4"><i class="fas fa-check"></i> {{__('wdos_txt_siete')}}</p>
                </div>
            </div>
        </div>

        <!-- section right end -->
    </div>
</div>
