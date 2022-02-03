<div class="container">
    <div class="row">
        <!-- section left start -->
        <div class="col-md-12 col-lg-8 mt-4">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <a class="back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> {{__('regresar')}}</a>
                </div>
            </div>
                    {{-- <input type="text" class="tarifas" value="@dd($tours)"> --}}
                    <input type="hidden" class="tarifas" value="{{ $tours[1] }}">
                    <input type="hidden" class="tarifas" value="{{ $tours[2] }}">

            <form id="booking_form" method="POST">
                @csrf

                <!-- customer information start  -->
                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">01</small> {{__('informacion cliente')}} </h5>
                    <div class="col-sm-4 col-md-4 mb-1">
                        <label for="name" class="form-label">{{ __('nombre') }}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text"
                                class="form-control" id="name" name="name" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="paterno" class="form-label"> {{__('apellido paterno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" required type="text"
                                class="form-control" id="paterno" name="paterno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <label for="materno" class="form-label"> {{__('apellido materno')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-user"><i class="fas fa-user input__icon"></i></span>
                            <input oninput="write_name()" data-parsley-minlength="3" type="text" class="form-control"
                                id="materno" name="materno" aria-describedby="icon-user">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 mb-1">
                        <label for="phone-number" class="form-label">{{__('telefono')}}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-phone"><i
                                    class="fas fa-phone input__icon"></i></span>
                            <input required type="tel" data-parsley-type="digits" id="phone" name="phone"
                                class="form-control" aria-describedby="icon-phone">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="email" class="form-label">{{__('correo electronico')}}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-email"><i
                                    class="fas fa-envelope input__icon"></i></span>
                            <input required type="text" class="form-control" id="email" name="email"
                                aria-describedby="icon-email">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="countries" class="form-label">{{__('pais')}}</label>
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
                    <div class="col-md-6 col-lg-6 mb-4">
                        <label for="states" class="form-label">{{__('estado')}}</label>
                        <div class="input-group">
                            <label for="icon-state" class="input-group-text"><i
                                    class="fas fa-location-arrow input__icon"></i></label>
                            <select required id="states" name="state_id" class="form-select states">
                                <option selected value="null" disabled> {{__('selecciona un estado')}} </option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- customer information end -->

                <div class="row form-section mb-4">
                    <h5 class="mt-2"><small class="number__section">02</small> {{__('informacion reserva')}}
                    </h5>
                    <div class="col-sm-6 col-md-12 mb-1">
                        <label for="arrival" class="form-label">{{__('ubicacion abordaje')}}</label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-plane"><i
                                    class="fas fa-map-marked-alt input__icon"></i></span>
                            <input required type="text" class="form-control" id="origen" name="origin"
                                placeholder="{{__('ingresa tu origen')}}" aria-describedby="icon-date">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-1">
                        <label for="arrival" class="form-label"> {{__('pasajeros')}} </label>
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
                        <label for="date" class="form-label"> {{__('fecha')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-date"><i
                                    class="fas fa-calendar-alt input__icon"></i></span>
                            <input required style="background: #FFFFFF;" type="date" class="form-control selector"
                                id="date_departure" name="d_departure" aria-describedby="icon-date"
                                placeholder="{{ __('select_fecha') }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-1">
                        <label for="hour" class="form-label"> {{__('hora')}} </label>
                        <div class="input-group">
                            <span class="input-group-text" id="icon-hour"><i
                                    class="fas fa-clock input__icon"></i></span>
                            <input required type="time" class="form-control" id="hour" name="t_departure"
                                aria-describedby="icon-hour" value="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 mb-4">
                        <label for="c_arrival" class="form-label"> {{__('comentarios')}} </label>
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
                    <h6 class="col"> {{__('total a pagar')}} </h6>
                    <input readonly type="hidden" class="form-control" name="destiny" aria-describedby="icon-hour"
                        value="PALENQUE, CHIAPAS">
                    <input readonly type="hidden" class="form-control" name="type_service"
                        aria-describedby="icon-hour" value="Tours">
                    <input readonly type="hidden" class="form-control" name="retorno" aria-describedby="icon-hour"
                        value="si">
                    <input type="hidden" readonly id="request_unit" name="request_unit">
                    <input type="hidden" readonly id="type_trip" name="type_trip">

                    <input readonly type="hidden"  name="price" class="prices_inputs divisa_sub" value="">
                    <input readonly type="hidden" id="price_mx" name="price_mx" class="prices_inputs_mx divisa_sub" value="{{ $tours[1] }}">
                    <input  readonly type="hidden" name="divisa" class="divisas_inputs divisa_sub" value="">

                    <input readonly type="hidden"  name="price" class="prices_inputs divisa_van" value="">
                    <input readonly type="hidden" id="price_mx"  name="price_mx" class="prices_inputs_mx divisa_van" value="{{ $tours[2] }}">
                    <input  readonly type="hidden"  name="divisa" class="divisas_inputs divisa_van" value="">
                    <h5 class="col text-end price divisa_sub"><p class="prices divisa_sub"></p></h5>
                    <h5 class="col text-end price divisa_van"><p  class="prices divisa_van"></p></h5>

                </div>
                <!-- section total end -->

                <div class="row mb-4">
                    <button class="btn btn-success nexttab btnPayment" id="btnPayment">{{__('continuar')}}</button>
                    <p class="terms mt-2">{{__('Al hacer clic en el boton estas aceptando los')}} <a href="{{route('terms', app()->getLocale())}}">{{__('terminos y condiciones')}}</a>.</p>
                </div>

            </form>
        </div>
        <!-- section left end -->

        <!-- section right start  -->
        <div class="col-md-12 col-lg-4 mt-4">
            <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-4 reservation__summary">
                    <h5 class="title__reservation mt-2"> {{__('resumen')}} </h5>
                    <p class="title mb-0 text-left">{{__('tipo_servicio')}}</p>
                    <p class="description text-left"><i class="fas fa-sync-alt icon-resume"></i> Tours</p>
                    <p class="title mb-0">{{ __('hacia') }}</p>
                    <p class="description"><i class="fas fa-map-marker-alt icon-resume"></i> {{ $tours[0] }}</p>
                    <p class="title mb-0">{{__('servicios')}}</p>
                    <p class="description" id="select_service"><i class="fas fa-shuttle-van icon-resume"></i></p>
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
