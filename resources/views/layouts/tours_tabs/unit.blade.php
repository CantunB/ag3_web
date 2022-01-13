<div class="container">
    <div class="row">
        {{-- section left start --}}
        <div class="col-lg-8 mt-4">
            <h5 class="list p-2">Lista de servicios disponibles para su transporte de llegada a <span class="text-primary text-uppercase"></span> para <span class="text-primary"></span> pasajeros. </h5>
            <input type="hidden" id="type_service" value="Tours">
            <!-- service-van start  -->
            <div class="row">
                <div class="col mb-4 service-list">
                    <div class="row mb-4">
                        <!-- section left -->
                        <div class="col-md-3 left">
                            <h4 class="mt-2 title-service">TRANSPORTE VAN</h4>
                            <img class="service-img" src="{{ asset('assets/images/transport-van.png') }}" alt="transport-van">
                            <ul>
                                <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 8 pax.</li>
                                <li class="specifications"><i class="fas fa-suitcase icons-specifications icon-second"></i> Max. 7 maletas</li>
                                <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> Precio por vehiculo</li>
                            </ul>
                            <ul class="buttons">
                                <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> Impuestos incluidos</li>
                                <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> Seguro de viaje</li>
                            </ul>
                        </div>

                        <!-- section right -->
                        <div class="col-md-9 right">
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center mt-2 title-eco van_sen">SENCILLO</li>
                            <li class="text-center mt-2 title-pre van_red">REDONDO</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Tiempo de espera</li>
                            <li class="text-center van_sen">Hasta 30 min.</li>
                            <li class="text-center van_red">Minimo</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Servicio privado</li>
                            <li class="text-center van_sen"><i class="fas fa-check"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Cancelacion gratuita</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Cuponera de descuentos</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Amenidades de bienvenida</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">Kit de salud Covid-19</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-4">Paradas de cortesia en tienda de conveniencia</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center price-eco van_sen"></li>
                            <li class="text-center price-pre van_red"></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="van_sen">
                                <form id="van_sencillo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt3_unit" value="2">
                                    <input type="hidden" name="type_trip" id="opt3_type_trip" value="1">
                                    <button type="button" class="button-eco btnComplete" id="opt3">Reserva ahora</button>
                                </form>
                            </li>
                            <li class="van_red">
                                <form id="van_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt4_unit" value="2">
                                    <input type="hidden" name="type_trip"  id="opt4_type_trip"  value="2">
                                    <button type="button" class="button-pre btnComplete" id="opt4">Reserva ahora</button>
                                </form>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service-van end -->
        </div>
        <!-- section left end  -->


        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">Resumen de reservacion</h5>
                    <p class="title mb-0">Tipo de servicio</p>
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> </p>
                    <p class="title mb-0">Desde</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i>
                    </p>
                    <p class="title mb-0">Hacia</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i>
                    </p>
                    <p class="title mb-0">Fecha</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i></p>
                    <p class="title mb-0">Hora</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> </p>
                    <p class="title mb-0">Numero de pasajeros</p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> </p>
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
