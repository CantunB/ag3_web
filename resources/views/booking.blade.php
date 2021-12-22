<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo.ico') }}" />
	<title> {{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AG3 Landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                                <li class="nav-item ">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Select your Service</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Your Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="contact" aria-selected="false">Complete your booking</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @include('layouts.booking_tabs.service')
                                </div>
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('layouts.booking_tabs.information')
                                </div>
                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
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
