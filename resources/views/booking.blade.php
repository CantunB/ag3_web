<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.components.css')
</head>
    <body>
        <div id="app" class="super_container">
            @include('layouts.components.header')
            <div class="home">
                @include('layouts.components.slider')
            </div>
            <div  class="mt-5 container shadow-lg rounded">
            <h4>Registro de informacion del pasajero para su reserva</h4>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <ul class="nav nav-tabs  nav-fill flex-column  flex-sm-row" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Select your Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Your Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Complete your booking</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div  class="mt-5 container  shadow-lg rounded">
                                        <h4>List of service available for your Arrival transportation to Passengers</h4>
                                            <div class="row">
                                                    <div class="mt-4 mb-4 col-md-4 shadow text-center">
                                                        <h5 class="text-uppercase" style="color: blue">transport type van </h5>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-6 col-md-12 text-center">
                                                                        <img src="{{ asset('assets/images/icons/van.png') }}" alt="..." class="rounded " width="200px">
                                                                    </div>
                                                                    {{-- <div class="col-xs-12 col-sm-6 col-md-8">
                                                                        <ul class="col-xs-4 col-sm-6 col-md-12">
                                                                            <li><p>Booking modification</p></li>
                                                                            <li><p>Covid-19 Health Kit</p></li>
                                                                            <li><p>Private service</p></li>
                                                                            <li><p>Waiting time</p></li>
                                                                            <li><p>TRAVEL INSURANCE</p></li>
                                                                        </ul>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 col-md-4 border rounded">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded rounded mt-2 mb-2 p-1 border text-center">
                                                                    <h5 class="text-primary text-center">SENCILLO</h5>
                                                                    <ul>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                                        <li><p><i style="color: red" class="fas fa-times"></i> Private service</p></li>
                                                                        <li><p><i style="color: red" class="fas fa-times"></i> Waiting time</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                                    </ul>
                                                                    <h4 class="p-1 text-center text-dark">$40.00 USD</h4>
                                                                    <a href="#profile-tab" type="button" class="btn btn-primary">RESERVAR</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded mt-2 mb-2 p-1 border text-center">
                                                                    <h5 class="text-primary text-center">REDONDO</h5>
                                                                    <ul>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Private service</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> Waiting time</p></li>
                                                                        <li><p><i style="color: lime" class="fas fa-check"></i> INSURANCE</p></li>
                                                                    </ul>
                                                                    <h4 class="p1- text-center text-dark">$75.00 USD</h4>
                                                                    <a href="#profile-tab" type="button" class="btn btn-success aling-center">RESERVAR</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 col-md-4 text-dark">
                                                        <div style="border-style: dotted; border-color:rgb(0, 4, 255)" class="mt-4 p-3 rounded">
                                                            <h5 class="text-primary">Need help with your booking?</h5>
                                                            <p>We would be more than happy to help you. Our call center is at your service.</p>
                                                            <hr>
                                                            <strong>{{ __('contactanos') }}: </strong><span><strong>+52 (998) 387.0229</strong></span>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="mt-4 col-md-4 shadow text-center">
                                                    <h5 class="text-uppercase" style="color: blue">transport type suburban </h5>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6 col-md-12 text-center">
                                                                <img src="{{ asset('assets/images/icons/camioneta.png') }}" alt="..." class="rounded " width="200px">
                                                            </div>
                                                            {{-- <div class="col-xs-12 col-sm-6 col-md-8">
                                                                <ul class="col-xs-4 col-sm-6 col-md-12">
                                                                    <li><p>Booking modification</p></li>
                                                                    <li><p>Covid-19 Health Kit</p></li>
                                                                    <li><p>Private service</p></li>
                                                                    <li><p>Waiting time</p></li>
                                                                    <li><p>TRAVEL INSURANCE</p></li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 col-md-4 border rounded">
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class="rounded mt-2 mb-2 p-1 border text-center">
                                                                <h5 class="text-primary text-center">SENCILLO</h5>
                                                                <ul>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                                    <li><p><i style="color: red" class="fas fa-times"></i> Private service</p></li>
                                                                    <li><p><i style="color: red" class="fas fa-times"></i> Waiting time</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> TRAVEL INSURANCE</p></li>
                                                                </ul>
                                                                <h4 class="p-1 text-center text-dark" >$65.00 USD</h4>
                                                                <a href="#profile-tab" type="button" class="btn btn-primary">RESERVAR</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div style="background-color: rgba(68, 68, 68, 0.062)" class=" rounded mt-2 mb-2 p-1 border text-center">
                                                                <h5 class="text-primary text-center">REDONDO</h5>
                                                                <ul>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Booking modification</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Covid-19 Health Kit</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Private service</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> Waiting time</p></li>
                                                                    <li><p><i style="color: lime" class="fas fa-check"></i> INSURANCE</p></li>
                                                                </ul>
                                                                <h4 class="p-1 text-center text-dark" >$105.00 USD</h4>
                                                                <a href="#profile-tab" type="button" class="btn btn-success">RESERVAR</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="mt-4 col-md-4 text-dark">
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
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="p-2 col-md-4">
                                                <div  class="mt-5 p-3 col-md-12 bg-light rounded">
                                                    <h5 class="text-dark">Booking Summary</h5>
                                                    <label>Type of Service</label>
                                                    <input type="text" class="form-control" id="inputAddress">
                                                    <label>From</label>
                                                    <input type="text" class="form-control" id="inputAddress">
                                                    <label>To</label>
                                                    <input type="text" class="form-control" id="inputAddress">
                                                    <label>Number of Passengers</label>
                                                    <input type="text" class="form-control" id="inputAddress">
                                                    <label>Service</label>
                                                    <input type="text" class="form-control" id="inputAddress">
                                                    <label>Total</label>
                                                    <h4 class="text-warning">$80.00 USD</h4>
                                                </div>
                                            </div>
                                            <div class="p-2 col-md-8">
                                                <div class="p-3 mt-5 container bg-light rounded">
                                                    <h4 class="text-dark">01 Client Information</h4>
                                                <form>
                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Full name</label>
                                                        <input type="text" class="form-control" id="inputEmail4">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Phone number</label>
                                                        <input type="text" class="form-control" id="inputPassword4">
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Email</label>
                                                        <input type="email" class="form-control" id="inputAddress">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputState">Country</label>
                                                            <select id="inputState" class="form-control">
                                                              <option selected>Choose...</option>
                                                              <option>...</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                              <option selected>Choose...</option>
                                                              <option>...</option>
                                                            </select>
                                                          </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-md-4">
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
                                            <div class="p-2 col-md-8">
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
                                            <div class="mt-4 p-3 bg-light rounded">
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
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="mt-2 p-2 col-md-8 bg-light rounded">
                                                <div class="mt-4 p-2">
                                                    <h4 class="text-dark">Total to pay</h4>
                                                    <h4 class="text-right text-warning">$80.00 USD</h4>
                                                    <div class="p-3 col-md-12">
                                                        <button type="button" class="btn btn-block btn-primary"> REGISTRAR</button>
                                                    </div>
                                                    <spam>By clicking submit you are agreeing to the terms and conditions</spam>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="container ">
                                        <div class="row">
                                            <div class="p-5 col-md-12 text-center">
                                                <div id="paypal-button-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.components.footer')
        </div>
        @include('layouts.components.script')
    </body>
</html>
