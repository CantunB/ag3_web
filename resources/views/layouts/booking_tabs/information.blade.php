<div class="container">
    <form id="booking_form" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="p-2 col-md-12">
                    <div  class="mt-5 p-3 col-md-12 bg-ligth rounded">
                        <h4 class="text-dark text-uppercase text-center">Booking Summary</h4>
                        <label class="mt-2 text-uppercase text-dark">Tipo de servicio</label>
                        <input type="text" readonly class="form-control" name="service" value="{{ $service }}">
                        <input type="hidden" readonly class="form-control" name="unit" id="unit" value="{{ $unit }}">
                        <input type="hidden" readonly class="form-control" name="price" id="price" value="{{ $price }}">
                        <label class="mt-2 text-uppercase text-dark">Desde</label>
                        <input type="text" readonly class="form-control" name="origen" value="{{ $origen }}">
                        <label class="mt-2 text-uppercase text-dark">Hasta</label>
                        <input type="text" readonly class="form-control" name="destino" value="{{ $destino }}">
                        <label class="mt-2 text-uppercase text-dark">Numero de pasajeros</label>
                        <input type="text" readonly  class="form-control" name="passengers" value="{{ $passengers }}">
                        <label class="mt-2 text-uppercase text-dark">Fecha</label>
                        <input type="text" readonly  class="form-control" name="date" value="{{ $date }}">
                        <label class="mt-2 text-uppercase text-dark">Hora</label>
                        <input type="text" readonly  class="form-control" name="pickup" value="{{ $pickup }}">
                        @if ($retorno == 'si')
                        <label class="mt-2 text-uppercase text-dark">Fecha de regreso</label>
                        <input type="hidden" readonly class="form-control" name="retorno"  value="{{ $retorno }}">
                        <input type="text" readonly class="form-control" name="date_comeback"  value="{{ $date_comeback }}">
                        <label class="mt-2 text-uppercase text-dark">Hora de regreso</label>
                        <input type="text" readonly class="form-control" name="time_comeback" value="{{ $time_comeback }}">
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
                        <h4 class="text-dark">01 Client Information</h4>

                        <div class="form-row">
                          <div class="form-row">
                            <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Nombre</label>
                                <input data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="name" name="name">
                              </div>
                              <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Ap. Paterno</label>
                                <input data-parsley-minlength="3" data-parsley-trigger="focusout" required type="text" class="form-control" id="paterno" name="paterno">
                              </div>
                              <div class="form-group col-md-4">
                                <label 	 for="inputEmail4">Ap. Materno</label>
                                <input data-parsley-minlength="3" data-parsley-trigger="focusout" type="text" class="form-control" id="materno" name="materno">
                              </div>
                          </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phone number</label>
                                    <input data-parsley-trigger="focusout" required data-parsley-type="digits" name="phone" type="tel" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Email</label>
                                    <input data-parsley-trigger="focusout" required type="email" name="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Country</label>
                                <select required id="countries" name="country" class="form-control">
                                    <option selected value="null" disabled>Selecciona un pais</option>
                                  @foreach ($countries as $country)
                                  <option value="{{$country->id}}">
                                   {{$country->name}}
                                  </option>
                              @endforeach
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputState">State</label>
                                <select required id="states" name="state" class="form-control">
                                    <option selected value="null" disabled>Selecciona un estado</option>
                                </select>
                              </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="p-2 col-md-12">
                    <div class="mt-2 p-3 bg-light rounded">
                        <h4 class="text-dark">02 Travel Information</h4>
                    <h5>Arrival Information</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Arrival airline</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Arrival Flight Number</label>
                            <input type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Date</label>
                                <input type="date" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress2">Hour</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress2">Minutes</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-2 p-2 bg-light rounded">
                    <h5 class="">Departure Information</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Departure airline</label>
                                <input type="text" class="form-control" id="inputEmail4" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Arrival Flight Number</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Date Flight</label>
                                <input type="date" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress2">Hour Flight</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress2">Minutes Flight</label>
                                <input type="text" class="form-control" id="inputAddress2" >
                            </div>
                        </div>
                    </form>
                </div> --}}

                <div class="mt-2 p-2 col-md-12 bg-light rounded">
                    <div class="mt-4 p-2">
                        <h4 class="text-dark">Total to pay</h4>
                        <h4 class="text-right text-warning">${{ $price }} MXN</h4>
                        <div class="p-3 col-md-12">
                            <button type="button" class="btn btn-block btn-primary btnPayment"> RESERVAR</button>
                        </div>
                        <spam>By clicking submit you are agreeing to the terms and conditions</spam>
                    </div>
                </div>
                </div>
                </div>
    </div>
    </form>
</div>
