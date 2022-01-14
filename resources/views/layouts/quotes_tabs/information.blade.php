<div class="container">
    <div class="row">
        <!-- section left start -->
        <div class="col-md-12 col-lg-8 mt-4">
            <div class="row">
            <a class="mb-2 back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>
            <form id="quotes_form" method="POST" action="{{ route('quotes',app()->getLocale())}}">
                @csrf
                <!-- customer information start  -->
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">01</small> Informacion del cliente</h5>
                    <div class="col-sm-4 col-md-4 mb-1">
                        <label for="name" class="form-label">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3" required type="text" class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label">Apellido Paterno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3" required type="text" class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label">Apellido Materno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i
                                    class="fas fa-user input__icon"></i></span>
                            <input data-parsley-minlength="3"  type="text" class="form-control" id="materno" name="materno" aria-describedby="icon-user">
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
                    <input type="hidden" name="type_service" value="{{ $booking['service'] }}">
                    <input type="hidden" name="origin" value="{{ $booking['origen'] }}">
                    <input type="hidden" name="destiny" value="{{ $booking['destino'] }}">
                    <input type="hidden" name="date_service" value="{{ $booking['date'] }}">
                    <input type="hidden" name="time_service" value="{{ $booking['pickup'] }}">
                    <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                    <input type="hidden" id="request_unit" name="request_unit">
                    <input type="hidden" id="type_trip" name="type_trip">

                </div>
                <div class="row mb-4">
                    <button type="submit" class="btn btn-success" id="btnBooking" >Cotizar</button>
                    <p class="terms mt-2">Al hacer clic en el boton estas aceptando los <a href="#">terminos y condiciones</a>.</p>
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
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $booking['service'] }}</p>
                    <p class="title mb-0">Desde</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['origen'] }}
                    </p>
                    <p class="title mb-0">Hacia</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['destino'] }}
                    </p>
                    <p class="title mb-0">Fecha</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date'] }}</p>
                    <p class="title mb-0">Hora</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['pickup'] }}</p>
                    <p class="title mb-0">Numero de pasajeros</p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> {{ $booking['passengers'] }}</p>
                    <p class="title mb-0">Servicio</p>
                    <p class="description" id="select_service"><i class="fas fa-shuttle-van icon-resume"></i></p>
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
