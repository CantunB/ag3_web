<div class="container">
    <div class="row">
        {{-- section left start --}}
        <div class="col-lg-8 mt-4">
            <input type="hidden" id="type_service" value="{{ $booking['service']  }}">
            <!-- service-suburban start  -->
            <div class="row">
                <div class="col mb-4 service-list">
                    <div class="row mb-4">
                        <!-- section left -->
                        <div class="col-md-3 left">
                            <h4 class="mt-2 title-service">{{ __('transporte') }} SUBURBAN</h4>
                            <img class="service-img" src="{{ asset('assets/images/transport-suburban-min.png') }}" alt="transport-suburban">
                            <ul>
                                <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 6 pax.</li>
                                <li class="specifications"> <i class="fas fa-suitcase icons-specifications icon-second"></i>  Max. 6 {{ __('maletas') }}</li>
                                <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> {{ __('precio_vehiculo') }}</li>
                            </ul>
                            <ul class="buttons">
                                <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> {{ __('impuestos') }}</li>
                                <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> {{ __('seguro') }}</li>
                            </ul>
                        </div>

                        <!-- section right -->
                        <div class="col-md-9 right">
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center mt-2 title-eco sub_sen">{{ __('sencillo') }}</li>
                            <li class="text-center mt-2 title-pre sub_red">{{ __('redondo') }}</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_uno') }}</li>
                            <li class="text-center sub_sen">{{ __('tiempo_espera') }}</li>
                            <li class="text-center sub_red">{{ __('tiempo_espera') }}</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_dos') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-check"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_tres') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_cuatro') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_cinco') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_seis') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-check"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-4">{{ __('serv_txt_siete') }}</li>
                            <li class="text-center sub_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center sub_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center price-eco sub_sen"></li>
                            <li class="text-center price-pre sub_red"></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="sub_sen">
                                <form id="sub_sencillo" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt1_unit" value="1">
                                    <input type="hidden" name="type_trip" id="opt1_type_trip" value="1">
                                    <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                    <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                    <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                    <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                    <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                    <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                    <button type="button" class="button-eco btnComplete" id="opt1">{{ __('Reserva ahora') }}</button>
                                </form>
                            </li>
                            <li class="sub_red">
                                <form id="sub_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt2_unit"  value="1">
                                    <input type="hidden" name="type_trip" id="opt2_type_trip" value="2">
                                    <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                    <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                    <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                    <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                    <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                    <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                    <button type="button" class="button-pre btnComplete" id="opt2">{{ __('Reserva ahora') }}</button>
                                </form>
                            </li>
                        </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- service-suburban end -->

            <!-- service-van start  -->
            <div class="row">
                <div class="col mb-4 service-list">
                    <div class="row mb-4">
                        <!-- section left -->
                        <div class="col-md-3 left">
                            <h4 class="mt-2 title-service">{{ __('transporte') }} VAN</h4>
                            <img class="service-img" src="{{ asset('assets/images/transport-van2.png') }}" alt="transport-van">
                            <ul>
                                <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 7 pax.</li>
                                <li class="specifications"><i class="fas fa-suitcase icons-specifications icon-second"></i> Max. 10 {{ __('maletas') }}</li>
                                <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> {{ __('precio_vehiculo') }}</li>
                            </ul>
                            <ul class="buttons">
                                <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> {{ __('impuestos') }}</li>
                                <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> {{ __('seguro') }}</li>
                            </ul>
                        </div>

                        <!-- section right -->
                        <div class="col-md-9 right">
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center mt-2 title-eco van_sen">{{ __('sencillo') }}</li>
                            <li class="text-center mt-2 title-pre van_red">{{ __('redondo') }}</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_uno') }}</li>
                            <li class="text-center van_sen">{{ __('tiempo_espera') }}</li>
                            <li class="text-center van_red">{{ __('tiempo_espera') }}</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_dos') }}</li>
                            <li class="text-center van_sen"><i class="fas fa-check"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_tres') }}</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_cuatro') }}</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_cinco') }}</li>
                            <li class="text-center van_sen"><i class="fas fa-times"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2">{{ __('serv_txt_seis') }}</li>
                            <li class="text-center van_sen"><i class="fas fa-check"></i></li>
                            <li class="text-center van_red"><i class="fas fa-check"></i></li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-4">{{ __('serv_txt_siete') }}</li>
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
                                    <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                    <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                    <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                    <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                    <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                    <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                    <button type="button" class="button-eco btnComplete" id="opt3">{{ __('Reserva ahora') }}</button>
                                </form>
                            </li>
                            <li class="van_red">
                                <form id="van_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt4_unit" value="2">
                                    <input type="hidden" name="type_trip"  id="opt4_type_trip"  value="2">
                                    <input type="hidden" name="service" value="{{ $booking['service'] }}">
                                    <input type="hidden" name="origen" value="{{ $booking['origen'] }}">
                                    <input type="hidden" name="destino" value="{{ $booking['destino'] }}">
                                    <input type="hidden" name="date" value="{{ $booking['date'] }}">
                                    <input type="hidden" name="pickup" value="{{ $booking['pickup'] }}">
                                    <input type="hidden" name="passengers" value="{{ $booking['passengers'] }}">
                                    <button type="button" class="button-pre btnComplete" id="opt4">{{ __('Reserva ahora') }}</button>
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
                    <h5 class="title__reservation mt-2">{{ __('resumen') }}</h5>
                    <p class="title mb-0">{{ __('tipo_servicio') }}</p>
                    <p class="description"><i class="fas fa-sync-alt icon-resume"></i> {{ $booking['service'] }}</p>
                    <p class="title mb-0">{{ __('desde') }}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['origen'] }}
                    </p>
                    <p class="title mb-0">{{ __('hacia') }}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $booking['destino'] }}
                    </p>
                    <p class="title mb-0">{{ __('fecha') }}</p>
                    <p class="description"><i class="fas fa-calendar-alt icon-resume"></i> {{ $booking['date'] }}</p>
                    <p class="title mb-0">{{ __('hora') }}</p>
                    <p class="description"><i class="fas fa-clock icon-resume"></i> {{ $booking['pickup'] }}</p>
                    <p class="title mb-0">{{ __('num_pasajeros') }}</p>
                    <p class="description"><i class="fas fa-users icon-resume"></i> {{ $booking['passengers'] }}</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{ __('widget_uno') }}</h5>
                    <p>{{ __('widget_text') }}</p>
                    <hr>
                    <p class="text-phone">{{ __('widget_cont') }}: +52 (938) 172 6488</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{ __('widget_dos') }}</h5>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_uno') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_dos') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_tres') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cuatro') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cinco') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_seis') }}</p>
                    <p class="mb-4"><i class="fas fa-check"></i> {{ __('wdos_txt_siete') }}</p>
                </div>
            </div>
        </div>
        <!-- section right end -->

    </div>
</div>
