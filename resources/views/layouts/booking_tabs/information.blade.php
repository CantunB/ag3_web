<div class="container">
    <div class="row">
        <!-- section left start -->
        <div class="col-md-12 col-lg-8 mt-4">
            <div class="row">
            <a class="mb-2 back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>
            <form id="booking_form" method="POST">
                @csrf

                <!-- customer information start  -->
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">01</small> Informacion del cliente</h5>
                    <div class="col-sm-4 col-md-4 mb-1">
                        <label for="name" class="form-label">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text" class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label">Apellido Paterno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text" class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label">Apellido Materno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3"  type="text" class="form-control" id="materno" name="materno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-1">
                        <label for="phone-number" class="form-label">Numero Telefonico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-phone"><i
                                    class="fas fa-phone input__icon"></i></span>
                            <input required type="tel" data-parsley-type="digits"  id="phone" name="phone" class="form-control" aria-describedby="icon-phone">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-email"><i
                                    class="fas fa-envelope input__icon"></i></span>
                            <input required type="text" class="form-control" id="email" name="email" aria-describedby="icon-email">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="countries" class="form-label">País</label>
                        <div class="input-group">
                            <label for="icon-globe" class="input-group-text"><i
                                    class="fas fa-globe-americas input__icon"></i></label>
                            <select required id="countries" name="country_id" class="form-select countries">
                                <option selected value="null" disabled>Selecciona un pais...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-4">
                        <label for="states" class="form-label">Estado</label>
                        <div class="input-group">
                            <label for="icon-state" class="input-group-text"><i class="fas fa-location-arrow input__icon"></i></label>
                            <select required id="states" name="state_id" class="form-select states">
                                <option selected value="null" disabled>Selecciona un estado...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- customer information end -->

                <!-- travel information start -->
                @if($service === 'Aeropuerto a Hotel')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                        <h5 class="title-arrival mb-0">Informacion de llegada</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">Aerolinea de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-arrival input__icon"></i></span>
                                <select required id="airline_arrival" name="a_arrival"  class="form-select airlines_arrival" aria-describedby="icon-plane">
                                    <option selected value="null" disabled>Selecciona una aerolinea...</option>
                                    @foreach ($airlines as $airline)
                                        <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">Numero de vuelo</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                        <span class="input-group-text iata" id="iata_arrival"></span>
                                <input oninput="iata_code_arrival()" required type="text" class="form-control " id="flight_number_arrival" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_arrival" name="fn_arrival">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label">Fecha de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" id="date_arrival" name="d_arrival" class="form-control" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label">Hora de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="t_arrival" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_arrival" class="form-label">Comentarios</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_arrival" aria-describedby="icon-comments">
                            </div>
                        </div>
                </div>

                @elseif($service === 'Hotel a Aeropuerto')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                    <h5 class="title-arrival mb-0">Informacion de Salida</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">Aerolinea de Salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-departure input__icon"></i></span>
                                        <select required id="airline_departure" name="a_departure" class="form-select airlines_departure" aria-describedby="icon-plane">
                                            <option selected value="null" disabled>Selecciona una aerolinea...</option>
                                            @foreach ($airlines as $airline)
                                                <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">Numero de vuelo</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                <span class="input-group-text iata" id="iata_departure"></span>
                                <input oninput="iata_code_departure()" required type="text" class="form-control " id="flight_number_departure" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_departure" name="fn_departure">

                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label">Fecha de salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date_departure" name="d_departure" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label">Hora de salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="t_departure" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_departure" class="form-label">Comentarios</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_departure" aria-describedby="icon-comments">
                            </div>
                        </div>
                </div>

                @elseif($service === 'Aeropuerto a Hotel a Aeropuerto')
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> Informacion del viaje</h5>
                        <h5 class="title-arrival mb-0">Informacion de llegada</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">Aerolinea de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-arrival input__icon"></i></span>
                                        <select required id="airline_arrival" name="a_arrival" class="form-select airlines_arrival" aria-describedby="icon-plane">
                                            <option selected value="null" disabled>Selecciona una aerolinea...</option>
                                            @foreach ($airlines as $airline)
                                                <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">Numero de vuelo</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                        <span class="input-group-text iata" id="iata_arrival"></span>
                                        <input oninput="iata_code_arrival()" required type="text" class="form-control " id="flight_number_arrival" aria-describedby="icon-hashtag">
                                        <input  type="hidden" id="iata_airline_arrival" name="fn_arrival">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_arrival" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label">Fecha de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date_arrival" name="d_arrival" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date)->format('Y-m-d') }}">

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label">Hora de llegada</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="t_arrival" aria-describedby="icon-hour" value="{{ $pickup }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_arrival" class="form-label">Comentarios</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_arrival" name="c_arrival" aria-describedby="icon-comments">
                            </div>
                        </div>
                        <h5 class="title-arrival mb-0">Informacion de salida</h5>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="arrival" class="form-label">Aerolinea de salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-plane"><i
                                        class="fas fa-plane-departure input__icon"></i></span>
                                    <select required id="airline_departure" name="a_departure" class="form-select airlines_departure" aria-describedby="icon-plane">
                                        <option selected value="null" disabled>Selecciona una aerolinea...</option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="flight-number" class="form-label">Numero de vuelo</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hashtag"><i
                                        class="fas fa-hashtag input__icon"></i></span>
                                <span class="input-group-text iata" id="iata_departure"></span>
                                <input oninput="iata_code_departure()" required type="text" class="form-control " id="flight_number_departure" aria-describedby="icon-hashtag">
                                <input  type="hidden" id="iata_airline_departure" name="fn_departure">
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="passenger_arrival" class="form-label">Nombre del pasajero</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-passenger"><i
                                        class="fas fa-user input__icon"></i></span>
                                <input readonly type="text" class="form-control fullname_passenger" id="passenger_departure" aria-describedby="icon-passenger">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label for="date" class="form-label">Fecha de salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-date"><i
                                        class="fas fa-calendar-alt input__icon"></i></span>
                                <input readonly type="date" class="form-control" id="date" name="d_departure" aria-describedby="icon-date" value="{{ Carbon\Carbon::parse($date_comeback)->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-1">
                            <label for="hour" class="form-label">Hora de salida</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-hour"><i
                                        class="fas fa-clock input__icon"></i></span>
                                <input readonly type="text" class="form-control" id="hour" name="t_departure" aria-describedby="icon-hour" value="{{ $time_comeback }}">

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 mb-4">
                            <label for="c_departure" class="form-label">Comentarios</label>
                            <div class="input-group">
                                <span class="input-group-text" id="icon-comments"><i
                                        class="fas fa-comments input__icon"></i></span>
                                <input type="text" class="form-control" id="c_departure" name="c_departure" aria-describedby="icon-comments">
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
                    <h6 class="col">Total a pagar</h6>
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
                    <button class="btn btn-success nexttab btnPayment" id="btnPayment" >Continuar</button>
                    <p class="terms mt-2">Al hacer clic en el boton estas aceptando los <a href="{{route('terms', app()->getLocale())}}">terminos y condiciones</a>.</p>
                </div>

            </form>
        </div>
        <!-- section left end -->

        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">Resumen de reservacion</h5>
                    <p class="title mb-0">Tipo de servicio</p>
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $service }}</p>
                    <p class="title mb-0">Desde</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $origen }}
                    </p>
                    <p class="title mb-0">Hacia</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $destino }}
                    </p>
                    <p class="title mb-0">Fecha</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date }}</p>
                    <p class="title mb-0">Hora</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $pickup }}</p>
                    <p class="title mb-0">Numero de pasajeros</p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> {{ $passengers }}</p>
                    @if ($retorno == 'si')
                    <p class="title mb-0">Fecha de regreso</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $date_comeback }}</p>
                    <p class="title mb-0">Hora de regreso</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $time_comeback }}</p>
                    @endif
                    <p class="title mb-0">Servicio</p>
                    <p class="description"><i class="fas fa-shuttle-van icon-resume"></i> {{ $type_unit->type_units }} {{$type_trip->type_trip}}</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">¿Necesitas ayuda con tu reservacion?</h5>
                    <p>Estariamos mas que felices de ayudarte. Nuestro call center esta a su servicio.</p>
                    <hr>
                    <p class="text-phone">Contactanos: +52 (998) 387 02 29</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">¿Que incluye mi reservacion?</h5>
                    <p class="mb-0"><i class="fas fa-check"></i> Recibimiento en el aeropuerto</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Aire acondicionado</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Seguro de pasajero</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Monitoreo de vuelo</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Servicio de transporte 24 hrs.</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Conductor profesional bilingue</p>
                    <p class="mb-4"><i class="fas fa-check"></i> No hay tarifas por cambios de vuelo</p>
                </div>
            </div>
        </div>

        <!-- section right end -->
    </div>
</div>
