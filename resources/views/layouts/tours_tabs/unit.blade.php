<link rel="stylesheet" href="{{ asset('css/tours-unit.css') }}">

<div class="container">
    <div class="row">
        {{-- section left start --}}
        <div class="col-lg-8 mt-4">
            <input type="hidden" id="type_service" value="Tours">

            <!-- service-suburban start -->
            {{-- <div class="row">
                <div class="col mb-4 service-list">
                    <div class="row mb-4">
                        <!-- section left -->
                        <div class="col-md-2 left">
                            <h4 class="mt-2 title-service">TRANSPORTE SUBURBAN</h4>
                            <img class="service-img" src="{{ asset('assets/images/transport-suburban.png') }}" alt="transport-suburban">
                            <ul>
                                <li class="specifications"><i class="fas fa-users icons-specifications"></i> Max. 8 pax.</li>
                                <li class="specifications"> <i class="fas fa-suitcase icons-specifications icon-second"></i>  Max. 7 maletas</li>
                                <li class="specifications"><i class="fas fa-car-side icons-specifications"></i> Precio por vehiculo</li>
                            </ul>
                            <ul class="buttons">
                                <li class="btn-green p-2 mb-2"><i class="fas fa-coins"></i> Impuestos incluidos22</li>
                                <li class="btn-blue p-2"><i class="fas fa-shield-alt"></i> Seguro de viaje</li>
                            </ul>
                        </div>

                        <!-- section right -->
                        <div class="col-md-9 right">
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="text-center mt-2 title-eco sub_sen">SENCILLO</li>
                            <li class="text-center mt-2 title-pre sub_red">TOURS</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li></li>
                            <li class="sub_sen">
                                <form id="sub_sencillo" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt1_unit" value="1">
                                    <input type="hidden" name="type_trip" id="opt1_type_trip" value="1">
                                    <button type="button" class="button-eco btnComplete" id="opt1">Reserva ahora</button>
                                </form>
                            </li>
                            <li class="sub_red">
                                <form id="sub_redondo" action="{{ route('complete', app()->getLocale()) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="unit" id="opt2_unit"  value="1">
                                    <input type="hidden" name="type_trip" id="opt2_type_trip" value="2">
                                    <button type="button" class="button-pre btnComplete" id="opt2">Reserva ahora</button>
                                </form>
                            </li>
                        </ul>
                        </div>

                    </div>
                </div>
            </div> --}}
            <!-- service-suburban end -->

            <div class="row">

                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="row">
                        <div class="col-md-11 content-unit">
                            <h4 class="title-unit">{{__('transporte')}} suburban</h4>

                            <div class="img-content">
                                <img class="transport-img" src="{{ asset('assets/images/transport-suburban-min.png') }}" alt="transport-suburban">
                            </div>

                            <div class="button-vehicule d-flex justify-content-center">
                                <input type="hidden" name="unit" id="opt2_unit"  value="1">
                                <input type="hidden" name="type_trip" id="opt2_type_trip" value="2">
                                <button type="button" class="button-pre btnComplete" id="opt2">{{__('seleccionar vehiculo')}}</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-end">
                        <div class="col-md-11 content-unit">
                            <h4 class="title-unit">{{__('transporte')}} van</h4>

                            <div class="img-content">
                                <img class="transport-img" src="{{ asset('assets/images/transport-van2.png') }}" alt="transport-van">
                            </div>

                            <div class="button-vehicule d-flex justify-content-center">
                                <input type="hidden" name="unit" id="opt4_unit" value="2">
                                <input type="hidden" name="type_trip"  id="opt4_type_trip"  value="2">
                                <button type="button" class="button-pre btnComplete" id="opt4">{{__('seleccionar vehiculo')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- service-van start  -->
            {{-- <div class="row">
                <div class="col mb-4 service-list">
                    <div class="row mb-2">
                        <!-- section left -->
                        <div class="col-md-2 left">
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
                            <li class="text-center mt-2 title-pre van_red">TOURS</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
                        </ul>
                        <ul class="table-row mb-0">
                            <li class="mb-2"></li>
                            <li class="text-center sub_sen"></li>
                            <li class="text-center sub_red">&nbsp;</li>
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
            </div> --}}
            <!-- service-van end -->

        </div>
        <!-- section left end  -->


        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2">{{ __('resumen') }}</h5>
                    <p class="title mb-0 text-left">{{ __('tipo_servicio') }}</p>
                    <p class="description text-left"><i class="fas fa-sync-alt icon-resume"></i> Tours</p>
                    <p class="title mb-0">{{ __('hacia') }}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $tours[0] }}</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{ __('widget_uno') }}</h5>
                    <p>{{ __('widget_text') }}</p>
                    <hr>
                    <p class="text-phone">{{__('widget_cont')}}: +52 998 523 7742</p>
                </div>

                <div class="col-md-12 col-lg-11 mb-4 widget">
                    <h5 class="title__widget mt-2">{{ __('widget_dos') }}</h5>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_uno') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_dos') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_tres') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cuatro') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_cinco') }}</p>
                    <p class="mb-0"><i class="fas fa-check"></i> {{ __('wdos_txt_seis') }}</p>
                    {{-- <p class="mb-4"><i class="fas fa-check"></i> {{ __('wdos_txt_siete') }}</p> --}}
                </div>
            </div>
        </div>
        <!-- section right end -->

    </div>
</div>
