<div class="container">
    <div class="row">
        <!-- section left start -->
        <div class="col-md-12 col-lg-8 mt-4">

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>
                </div>
            </div>

            <form id="booking_form" method="POST">
                @csrf

                <!-- customer information start  -->
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">01</small> {{__('informacion cliente')}} </h5>
                    <div class="col-sm-4 col-md-4 mb-1">
                        <label for="name" class="form-label">{{ __('nombre') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text" class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label"> {{__('apellido paterno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text" class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label"> {{__('apellido materno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3"  type="text" class="form-control" id="materno" name="materno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-1">
                        <label for="phone-number" class="form-label">{{__('telefono')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-phone"><i
                                    class="fas fa-phone input__icon"></i></span>
                            <input required type="tel" data-parsley-type="digits"  id="phone" name="phone" class="form-control" aria-describedby="icon-phone">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="email" class="form-label"> {{__('correo')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-email"><i
                                    class="fas fa-envelope input__icon"></i></span>
                            <input required type="text" class="form-control" id="email" name="email" aria-describedby="icon-email">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="countries" class="form-label">{{__('pais')}}</label>
                        <div class="input-group">
                            <label for="icon-globe" class="input-group-text"><i
                                    class="fas fa-globe-americas input__icon"></i></label>
                            <select required id="countries" name="country_id" class="form-select countries">
                                <option selected value="null" disabled> {{__('selecciona un pais')}} </option>
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
                                <option selected value="null" disabled>{{__('selecciona un estado')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- customer information end -->

                <!-- travel information start -->
                @if($service === 'Aeropuerto a Hotel')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> {{__('informacion del viaje')}} </h5>
                        <h5 class="title-arrival mb-0">{{__('informacion llegada')}}</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">{{__('aerolinea llegada')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-arrival input__icon"></i></span>
                                <select required id="airline_arrival" name="airline_arrival"  class="form-select airlines_arrival" aria-describedby="icon-plane">
                                    <option selected value="null" disabled> {{__('selecciona una aerolinea')}} </option>
                                    @foreach ($airlines as $airline)
                                        <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">{{__('numero de vuelo')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                        <span class="input-group-text iata" id="iata_arrival"></span>
                                <input oninput="iata_code_arrival()" required type="text" class="form-control " id="flight_number_arrival" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_arrival" name="flight_number_arrival">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">{{__('nombre del pasajero')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label">{{__('fecha de llegada')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" id="date_arrival" name="date_arrival" class="form-control" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label">{{__('hora de llegada')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="time_arrival" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_arrival" class="form-label">{{__('comentarios')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="comments_arrival" aria-describedby="icon-comments">
                            </div>
                        </div>
                </div>

                @elseif($service === 'Hotel a Aeropuerto')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small>{{__('informacion del viaje')}}</h5>
                    <h5 class="title-arrival mb-0">{{__('informacion salida')}}</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">{{__('aerolinea salida')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-departure input__icon"></i></span>
                                        <select required id="airline_departure" name="airline_departure" class="form-select airlines_departure" aria-describedby="icon-plane">
                                            <option selected value="null" disabled> {{__('selecciona una aerolinea')}} </option>
                                            @foreach ($airlines as $airline)
                                                <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label"> {{__('numero de vuelo')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                <span class="input-group-text iata" id="iata_departure"></span>
                                <input oninput="iata_code_departure()" required type="text" class="form-control " id="flight_number_departure" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_departure" name="flight_number_departure">

                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label"> {{__('nombre del pasajero')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label"> {{__('fecha de salida')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date_departure" name="date_departure" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label"> {{__('hora de salida')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="time_departure" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_departure" class="form-label"> {{__('comentarios')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="comments_departure" aria-describedby="icon-comments">
                            </div>
                        </div>
                </div>

                @elseif($service === 'Aeropuerto a Hotel a Aeropuerto')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> {{__('informacion del viaje')}}</h5>
                        <h5 class="title-arrival mb-0">{{__('informacion llegada')}}</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">{{__('aerolinea llegada')}}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-arrival input__icon"></i></span>
                                        <select required id="airline_arrival" name="airline_arrival" class="form-select airlines_arrival" aria-describedby="icon-plane">
                                            <option selected value="null" disabled>{{__('selecciona una aerolinea')}}</option>
                                            @foreach ($airlines as $airline)
                                                <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">{{__('numero de vuelo')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                        <span class="input-group-text iata" id="iata_arrival"></span>
                                        <input oninput="iata_code_arrival()" required type="text" class="form-control " id="flight_number_arrival" aria-describedby="icon-hashtag">
                                        <input  type="hidden" id="iata_airline_arrival" name="flight_number_arrival">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label"> {{__('nombre nombre del pasajero')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label"> {{__('fecha de llegada')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date_arrival" name="date_arrival" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label"> {{__('hora de llegada')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="time_arrival" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_arrival" class="form-label"> {{__('comentarios')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_arrival" name="comments_arrival" aria-describedby="icon-comments">
                            </div>
                        </div>
                        <h5 class="title-arrival mb-0"> {{__('informacion salida')}} </h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label"> {{__('aerolinea salida')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-departure input__icon"></i></span>
                                    <select required id="airline_departure" name="airline_departure" class="form-select airlines_departure" aria-describedby="icon-plane">
                                        <option selected value="null" disabled> {{__('selecciona una aerolinea')}} </option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label"> {{__('numero de vuelo')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                <span class="input-group-text iata" id="iata_departure"></span>
                                <input oninput="iata_code_departure()" required type="text" class="form-control " id="flight_number_departure" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_departure" name="flight_number_departure">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">{{__('nombre del pasajero')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_departure" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label"> {{__('fecha de salida')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date" name="date_departure" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date_comeback)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label"> {{__('hora de salida')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="time_departure" aria-describedby="icon-hour" value="{{ $time_comeback }}">

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_departure" class="form-label"> {{__('comentarios')}} </label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_departure" name="comments_departure" aria-describedby="icon-comments">
                            </div>
                        </div>
                </div>

                @endif
                <!-- travel information end -->


                <!-- Special request start -->
                {{-- <div class="row form-section mb-4 shadow-sm border">
                    <h5 class="mt-2"><small class="number__section">03</small> Solicitud especial e instrucciones
                    </h5>
                    <div class="col-md-6">
                        <label for="special-seat" class="form-label">Asiento para niño</label>
                        <div class="input-group">
                            <label for="icon-baby" class="input-group-text"><i
                                    class="fas fa-baby input__icon"></i></label>
                            <select id="special-seat" class="form-select">
                                <option selected disabled>Elige una opcion...</option>
                                <option>No</option>
                                <option>Si</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="extra" class="form-label">Equipo voluminoso</label>
                        <div class="input-group">
                            <label for="icon-extra" class="input-group-text"><i
                                    class="fas fa-suitcase input__icon"></i></label>
                            <select id="extra" class="form-select">
                                <option selected disabled>Elige una opcion...</option>
                                <option>No</option>
                                <option>Si</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="instructions" class="form-label">Instrucciones especiales</label>
                        <textarea class="form-control" id="instructions" rows="3"></textarea>
                    </div>
                </div> --}}
                <!-- special request end -->

                <!-- section total start -->
                <div class="row form-section d-flex align-items-center mb-4 total">
                    <h6 class="col">{{__('total a pagar')}}</h6>
                    <input readonly type="hidden" class="form-control" id="price_mx" aria-describedby="icon-hour" value="{{ $price_mx }}">
                    <input readonly type="hidden" class="form-control" name="price" id="price" aria-describedby="icon-hour" value="{{ $price }}">
                    <input readonly type="hidden" class="form-control" name="divisa" id="divisa" aria-describedby="icon-hour" value="{{ $divisa }}">
                    <input readonly type="hidden" class="form-control" name="request_unit" aria-describedby="icon-hour" value="{{ $type_unit->id }}">

                    <input readonly type="hidden" class="form-control" name="origin" aria-describedby="icon-hour" value="{{ $origen }}">
                    <input readonly type="hidden" class="form-control" name="destiny" aria-describedby="icon-hour" value="{{ $destino }}">
                    <input readonly type="hidden" class="form-control" name="passengers" aria-describedby="icon-hour" value="{{ $passengers }}">
                    <input readonly type="hidden" class="form-control" name="type_service" aria-describedby="icon-hour" value="{{ $service }}">
                    <input readonly type="hidden" class="form-control" name="retorno" aria-describedby="icon-hour" value="{{ $retorno }}">


                    <h5 class="col text-end prices">${{ $price }} {{$divisa}}</h5>
                </div>
                <!-- section total end -->

                <div class="row mb-4">
                    <button class="btn btn-success nexttab btnPayment" id="btnPayment" >{{__('continuar')}}</button>
                    <p class="terms mt-2"> {{ __('Al hacer clic en el boton estas aceptando los')}} <a href="{{route('terms', app()->getLocale())}}"> {{__('terminos y condiciones')}} </a>.</p>
                </div>

            </form>
        </div>
        <!-- section left end -->

        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">{{__('resumen de reservacion')}}</h5>
                    <p class="title mb-0">{{__('tipo de servicio')}}</p>
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $service }}</p>
                    <p class="title mb-0">{{__('desde')}}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $origen }}
                    </p>
                    <p class="title mb-0">{{__('hacia')}}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $destino }}
                    </p>
                    <p class="title mb-0">{{__('fecha')}}</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date }}</p>
                    <p class="title mb-0"> {{__('hora')}} </p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $pickup }}</p>
                    <p class="title mb-0"> {{__('num_pasajeros')}} </p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> {{ $passengers }}</p>
                    @if ($retorno == 'si')
                    <p class="title mb-0"> {{__('fecha_regreso')}} </p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date_comeback }}</p>
                    <p class="title mb-0"> {{__('hora_regreso')}} </p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $time_comeback }}</p>
                    @endif
                    <p class="title mb-0">Servicio</p>
                    <p class="description"><i class="fas fa-shuttle-van icon-resume"></i> {{ $type_unit->type_units }} {{$type_trip->type_trip}}</p>
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
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_dos')}} </p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_tres')}} </p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_cuatro')}} </p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_cinco')}} </p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{__('wdos_txt_seis')}} </p>
                    <p class="mb-4"><i class="fas fa-check"></i> {{__('wdos_txt_siete')}} </p>
                </div>
            </div>
        </div>

        <!-- section right end -->
    </div>
</div>
