<div class="container">
    <form id="booking_form" method="POST" autocomplete="off">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="p-2 col-md-12">
                    <div  class="mt-5 p-3 col-md-12 bg-ligth rounded">
                        <h4 class="text-dark text-uppercase text-center">RESUMEN DE RESERVA</h4>
                        <label class="mt-2 text-uppercase text-dark">Tipo de servicio</label>
                        <input type="text" readonly class="form-control" name="type_service" value="{{ $service }}">
                        <input type="hidden" readonly class="form-control" name="request_unit" id="unit" value="{{ $unit }}">
                        <input type="hidden" readonly class="form-control" name="price" id="price" value="{{ $price }}">
                        <label class="mt-2 text-uppercase text-dark">Desde</label>
                        <input type="text" readonly class="form-control" name="origin" value="{{ $origen }}">
                        <label class="mt-2 text-uppercase text-dark">Hasta</label>
                        <input type="text" readonly class="form-control" name="destiny" value="{{ $destino }}">
                        <label class="mt-2 text-uppercase text-dark">Numero de pasajeros</label>
                        <input type="text" readonly  class="form-control" name="passengers" value="{{ $passengers }}">
                        <label class="mt-2 text-uppercase text-dark">Fecha</label>
                        <input type="text" readonly  class="form-control" name="date_arrival" value="{{ $date }}">
                        <label class="mt-2 text-uppercase text-dark">Hora</label>
                        <input type="text" readonly  class="form-control" name="time_arrival" value="{{ $pickup }}">
                        @if ($retorno == 'si')
                        <label class="mt-2 text-uppercase text-dark">Fecha de regreso</label>
                        <input type="hidden" readonly class="form-control" name="round_service"  value="{{ $retorno }}">
                        <input type="text" readonly class="form-control" name="date_departure"  value="{{ $date_comeback }}">
                        <label class="mt-2 text-uppercase text-dark">Hora de regreso</label>
                        <input type="text" readonly class="form-control" name="time_departure" value="{{ $time_comeback }}">
                        @endif
                        <label class="mt-2 text-uppercase text-dark">Total</label>
                        <h4 class="text-warning text-center">${{ $price }} MXN</h4>
                    </div>
                </div>
                <div class="p-2 col-md-12">
                    <div class="col-md-12 p-1">
                        <div style="border-style: dotted; border-color:rgb(0, 4, 255)" class="mt-4 p-3 rounded">
                            <h5 class="text-primary">Need help with your booking?</h5>
                            <p>We would be more than happy to help you. Our call center is at your service.</p>
                            <hr>
                            <strong>{{ __('contactanos') }}: </strong><span><strong>+52 (998) 387.0229</strong></span>
                        </div>
                        <div style="border-style: dotted; border-color:rgb(0, 4, 255)" class="mt-4 p-3 rounded">
                            <h5 class="">What include your booking?</h5>
                            <ul>
                                <li>Air Conditioning</li>
                                <li>Travel Insurance</li>
                                <li>Flight monitoring</li>
                                <li>24 hrs transportation service</li>
                                <li>Professional bilingual driver</li>
                                <li>No fees for flight changes</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6">

                <div class="row">

                <div class="p-2 col-md-12">
                    <div class="p-3 mt-5 container bg-light rounded">
                        <h4 class="text-uppercase text-dark">01 INFORMACION DEL CLIENTE</h4>
                        <div class="form-row">
                          <div class="form-row">
                            <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Nombre</label>
                                <input  oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="name" name="name">
                              </div>
                              <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Ap. Paterno</label>
                                <input  oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="paterno" name="paterno">
                              </div>
                              <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Ap. Materno</label>
                                <input  oninput="write_name()" data-parsley-minlength="3" data-parsley-trigger="focusout" type="text" class="form-control" id="materno" name="materno">
                              </div>
                          </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero teleofico</label>
                                    <input data-parsley-trigger="focusout" required data-parsley-type="digits" name="phone" type="tel" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Correo electronico</label>
                                    <input data-parsley-trigger="focusout" required type="email" name="email" class="form-control" id="email">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">País</label>
                                <select required id="countries" name="country_id" class="form-control">
                                    <option selected value="null" disabled>Selecciona un pais</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}">
                                    {{$country->name}}
                                    </option>
                                @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputState">Estado</label>
                                <select required id="states" name="state_id" class="form-control">
                                    <option selected value="null" disabled>Selecciona un estado</option>
                                </select>
                              </div>
                        </div>

                    </div>
                </div>
                <div class="p-2 col-md-12">
                    <div class="mt-2 p-3 bg-light rounded">
                        <h4 class="p-2 text-uppercase text-dark">02 Informacion de viaje</h4>
                    @if($service === 'Aeropuerto a Hotel')
                        <div id="arrival">
                            <h5 class="text-uppercase text-blue text-primary">Información de llegada</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Aerolinea de llegada</label>
                                    <select  required class="form-control" name="a_arrival" id="airline_arrival">
                                        <option selected value="null" disabled>Selecciona una aerolinea</option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline  }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de vuelo</label>
                                    <input required type="text" class="form-control" name="fn_arrival" id="fn_arrival">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Nombre del pasajero</label>
                                    <input readonly type="text" class="form-control" id="passenger_arrival">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Fecha de llegada</label>
                                    <input required style="background-color: white"  type="date" class="form-control selector" name="d_arrival" id="inputAddress">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Hora de llegada</label>
                                    <input required style="background-color: white" type="text" class="form-control timer" name="t_arrival"  id="inputAddress2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Comentarios</label>
                                    <input type="text" name="c_arrival" class="form-control">
                                </div>
                            </div>
                        </div>
                    @elseif($service === 'Hotel a Aeropuerto')
                        <div id="departure">
                            <h5 class="text-uppercase text-primary">Información de salida</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Aerolinea de salida</label>
                                    <select  required class="form-control" name="a_departure" id="airline_departure">
                                        <option selected value="null" disabled>Selecciona una aerolinea</option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline  }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de vuelo</label>
                                    <input required type="text" class="form-control" name="fn_departure" id="fn_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Nombre del pasajero</label>
                                    <input  readonly type="text" class="form-control"  id="passenger_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Fecha de salida</label>
                                    <input required style="background-color: white" type="date" class="form-control selector" name="d_departure" id="d_departure">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Hora de salida</label>
                                    <input required style="background-color: white" type="time" class="form-control timer" name="t_departure" id="t_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Comentarios</label>
                                    <input  type="text" name="c_departure" class="form-control">
                                </div>
                            </div>
                        </div>
                    @elseif($service === 'Aeropuerto a Hotel a Aeropuerto')
                        <div id="arrival">
                            <h5 class="text-uppercase text-blue text-primary">Información de llegada</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Aerolinea de llegada</label>
                                    <select required  class="form-control" name="a_arrival" id="airline_arrival">
                                        <option selected value="null" disabled>Selecciona una aerolinea</option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline  }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de vuelo</label>
                                    <input required type="text" class="form-control" name="fn_arrival" id="fn_arrival">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Nombre del pasajero</label>
                                    <input readonly type="text" class="form-control" id="passenger_arrival">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Fecha de llegada</label>
                                    <input required style="background-color: white"  type="date" class="form-control" name="d_arrival" id="inputAddress">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Hora de llegada</label>
                                    <input required style="background-color: white" type="text" class="form-control" name="t_arrival"  id="inputAddress2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Comentarios</label>
                                    <input  type="text" name="c_arrival" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div id="departure">
                            <h5 class="text-uppercase text-primary">Información de salida</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Aerolinea de salida</label>
                                    <select  class="form-control" name="a_departure" id="airline_departure">
                                        <option selected value="null" disabled>Selecciona una aerolinea</option>
                                        @foreach ($airlines as $airline)
                                            <option value="{{ $airline->airline  }}">{{ $airline->airline }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Numero de vuelo</label>
                                    <input required type="text" class="form-control" name="fn_departure" id="fn_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Nombre del pasajero</label>
                                    <input  readonly type="text" class="form-control"  id="passenger_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Fecha de salida</label>
                                    <input required style="background-color: white" type="date" class="form-control selector" name="d_departure" id="d_departure">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Hora de salida</label>
                                    <input required style="background-color: white" type="time" class="form-control timer" name="t_departure" id="t_departure">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Comentarios</label>
                                    <input data-parsley-trigger="focusout" required type="text" name="c_departure" class="form-control">
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
                <div class="mt-2 p-2 col-md-12 bg-light rounded">
                    <div class="mt-4 p-2">
                        <h4 class="text-dark">Total to pay</h4>
                        <h4 class="text-right text-warning">${{ $price }} MXN</h4>
                        <div class="p-3 col-md-12">
                            <button type="button" class="btn btn-block btn-primary btnPayment"> RESERVAR</button>
                        </div>
                        <spam>Al hacer clic en enviar, acepta los términos y condiciones.</spam>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
