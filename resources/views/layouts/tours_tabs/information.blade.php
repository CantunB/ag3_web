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
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text"
                                class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label">Apellido Paterno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text"
                                class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label">Apellido Materno</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" type="text" class="form-control"
                                id="materno" name="materno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-1">
                        <label for="phone-number" class="form-label">Numero Telefonico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-phone"><i
                                    class="fas fa-phone input__icon"></i></span>
                            <input required type="tel" data-parsley-type="digits" id="phone" name="phone"
                                class="form-control" aria-describedby="icon-phone">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-email"><i
                                    class="fas fa-envelope input__icon"></i></span>
                            <input required type="text" class="form-control" id="email" name="email"
                                aria-describedby="icon-email">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
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
                    <div class="col-md-6 col-lg-6 mb-4">
                        <label for="states" class="form-label">Estado</label>
                        <div class="input-group">
                            <label for="icon-state" class="input-group-text"><i
                                    class="fas fa-location-arrow input__icon"></i></label>
                            <select required id="states" name="state_id" class="form-select states">
                                <option selected value="null" disabled>Selecciona un estado...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- customer information end -->

                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> Informacion para tu reserva
                    </h5>
                    <div class="col-sm-6 col-md-12 mb-1">
                        <label for="arrival" class="form-label">Ubicacion de abordaje</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-plane"><i
                                    class="fas fa-map-marked-alt input__icon"></i></span>
                            <input required type="text" class="form-control" id="origen" name="origin"
                                placeholder="Ingresa tu origen" aria-describedby="icon-date">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-1">
                        <label for="arrival" class="form-label">Pasajeros</label>
                        <div class="input-group num-block num-in">
                            <span class="input-group-text" id="icon-plane"><i
                                    class="fas fa-restroom input__icon"></i></span>
                            {{-- <input  type="text" class="form-control" id="origen" name="origin" aria-describedby="icon-date"> --}}
                            <!-- skin 5 -->
                            {{-- <div class="num-block skin-5">
                                <div class="num-in">
                                    <span class="minus dis">-</span>
                                    <input required type="text" class="in-num" value="1" readonly=""
                                        name="passengers">
                                    <span class="plus">+</span>
                                </div>
                            </div> --}}
                            <!-- / skin 5 -->

                            <span class="input-group-text minus dis">-</span>
                            <input type="text" class="form-control text-center in-num" value="1"
                                aria-describedby="icon-passenger" required name="passengers" readonly="">
                            <span class="input-group-text plus">+</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <label for="date" class="form-label">Fecha de servicio</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-date"><i
                                    class="fas fa-calendar-alt input__icon"></i></span>
                            <input required style="background: #FFFFFF;" type="date" class="form-control selector"
                                id="date_departure" name="d_departure" aria-describedby="icon-date"
                                placeholder="Selecciona una fecha">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-1">
                        <label for="hour" class="form-label">Hora de servicio</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-hour"><i
                                    class="fas fa-clock input__icon"></i></span>
                            <input required type="time" class="form-control" id="hour" name="t_departure"
                                aria-describedby="icon-hour" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 mb-4">
                        <label for="c_arrival" class="form-label">Comentarios</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-comments"><i
                                    class="fas fa-comments input__icon"></i></span>
                            <input type="text" class="form-control" id="c_arrival" name="c_departure"
                                aria-describedby="icon-comments">
                        </div>
                    </div>
                </div>

                <!-- section total start -->
                <div class="row form-section d-flex align-items-center mb-4 total">
                    <h6 class="col">Total a pagar</h6>
                    <input readonly type="hidden" class="form-control" name="price" id="price"
                        aria-describedby="icon-hour" value="">
                    <input readonly type="hidden" class="form-control" name="request_unit"
                        aria-describedby="icon-hour" value="2">
                    <input readonly type="hidden" class="form-control" name="destiny" aria-describedby="icon-hour"
                        value="PALENQUE, CHIAPAS">
                    <input readonly type="hidden" class="form-control" name="type_service"
                        aria-describedby="icon-hour" value="Tours">
                    <input readonly type="hidden" class="form-control" name="retorno" aria-describedby="icon-hour"
                        value="si">
                    <input type="hidden" readonly id="request_unit" name="request_unit">
                    <input type="hidden" readonly id="type_trip" name="type_trip">
                    <input readonly type="hidden" class="form-control" name="price" aria-describedby="icon-hour"
                        value="{{ $tours[1] }}">


                    <h5 class="col text-end price">$ {{ $tours[1] }} MXN</h5>
                </div>
                <!-- section total end -->

                <div class="row mb-4">
                    <button class="btn btn-success nexttab btnPayment" id="btnPayment">Continuar</button>
                    <p class="terms mt-2">Al hacer clic en el boton estas aceptando los <a href="#">terminos y
                            condiciones</a>.</p>
                </div>

            </form>
        </div>
        <!-- section left end -->

        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">Resumen de reservacion</h5>
                    <p class="title mb-0 text-left">Tipo de servicio</p>
                    <p class="description text-left"><i class="fas fa-sync-alt icon-resume"></i> Tours</p>
                    <p class="title mb-0">Hacia</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i>{{ $tours[0] }}</p>
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
                    <p class="mb-0"><i class="fas fa-check"></i> Recibimiento en tu lugar de preferencia
                    </p>
                    <p class="mb-0"><i class="fas fa-check"></i> Aire acondicionado</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Seguro de pasajero</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Monitoreo de reserva</p>
                    <p class="mb-0"><i class="fas fa-check"></i> Servicio de transporte 24 hrs.</p>
                    <p class="mb-4"><i class="fas fa-check"></i> Conductor profesional bilingue</p>
                    {{-- <p class="mb-4"><i class="fas fa-check"></i> No hay tarifas por cambios de vuelo</p> --}}
                </div>
            </div>
        </div>

        <!-- section right end -->
    </div>
</div>
