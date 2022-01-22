<div class="container mt-4 tours-section" id="tours">
    <h1 class="section-title text-center mb-4"><span>{{__('Tours disponibles')}}</span></h1>

    <div class="box-container">
        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/bacalar.jpg') }}" alt="bacalar">
            </div>
            <div class="content">
                <h4 class="text-center text-truncate"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Laguna Siete Col. Bacalar</h4>
                {{-- <h4 class="text-center text-truncate"></i>Bacalar</h4> --}}

                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$1650.00 <span>$1899.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{route('show',[app()->getLocale(), 'tours'=> 1] )}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/chichen-itza.jpg') }}" alt="chichen-itza">
            </div>
            <div class="content">
                <h4 class="text-center"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Chichen Itza, Yucatan</h4>
                <p class="mb-0 text-center"></p>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$1200.00 <span>$1399.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{url(app()->getLocale().'/booking/tours'.'/2')}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/palenque-chiapas.jpg') }}" alt="palenque-chiapas">
            </div>
            <div class="content">
                <h4 class="text-center"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Palenque, Chiapas</h4>
                <p class="mb-0 text-center"></p>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$2650.00 <span>$2899.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{url(app()->getLocale().'/booking/tours'.'/3')}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/calakmul-campeche.jpg') }}" alt="calakmul">
            </div>
            <div class="content">
                <h4 class="text-center"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Calakmul, Campeche</h4>
                <p class="mb-0 text-center"></p>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$1950.00 <span>$2199.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{url(app()->getLocale().'/booking/tours'.'/4')}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/ek-balam.jpg') }}" alt="ek-balam">
            </div>
            <div class="content">
                <h4 class="text-center text-truncate"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Ek Balam - Las Coloradas</h4>
                <p class="mb-0 text-center"></p>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$1650.00 <span>$1899.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{url(app()->getLocale().'/booking/tours'.'/5')}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="img-content">
                <img src="{{ asset('assets/images/coba.jpg') }}" alt="coba">
            </div>
            <div class="content">
                <h4 class="text-center"><i style="color: rgb(32, 190, 0)" class="fas fa-map-marker-alt"></i> Coba - 3 Cenotes</h4>
                <p class="mb-0 text-center"></p>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                {{-- <div class="price text-center">$1150.00 <span>$1399.00</span></div> --}}
                <div class="button-card d-flex justify-content-center">
                    <a href="{{url(app()->getLocale().'/booking/tours'.'/6')}}" class="mt-2 btn">{{__('Reserva ahora')}}</a>
                </div>
            </div>
        </div>

    </div>
</div>
