
<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Search for your trip</div>
                    <div class="home_search_content">
                        <form class="home_search_form" action="{{ route('car_booking',app()->getLocale()) }}" method="POST" id="form_search">
                            @csrf
                            @method('POST')
                            <div class="d-flex
                            flex-lg-row
                            flex-column
                            align-items-start
                            justify-content-lg-between
                            justify-content-start">
                                <div class="form-check form-check-inline col-md-6">
                                    <input  class="form-check-input checkmark" type="radio" name="service" value="Llegadas" >
                                    <label class="search_input_text form-check-label" for="inlineCheckbox1">Aeroline to Hotel</label>
                                </div>
                                <div class="form-check form-check-inline col-md-6">
                                    <input class="form-check-input checkmark" type="radio" name="service"  value="Salidas">
                                    <label class="search_input_text form-check-label" for="inlineCheckbox2">Hotel to Airline</label>
                                </div>
                            </div>
                            <div
                                class="mt-2 d-flex
                                    flex-lg-row
                                    flex-column
                                    align-items-start
                                    justify-content-lg-between
                                    justify-content-start">
                                    <select  class="search_input search_input_hotel origen">
                                        <option selected value="null" disabled>Selecciona un origen</option>

                                    </select>
                                    <select class="search_input search_input_hotel destino">
                                        <option selected value="null" disabled>Selecciona un destino</option>
                                    </select>
                                        <select class="search_input search_input_hotel origen_airline" name="origen">
                                            <option selected value="null" disabled>Selecciona una aerolinea</option>
                                            @foreach($airlines as $airline)
                                                <option>{{ $airline->airline }}</option>
                                            @endforeach
                                        </select>
                                        <select class="search_input search_input_hotel destino_hotel" name="destino">
                                            <option selected value="null" disabled>Selecciona una hotel</option>
                                                @foreach($hoteles as $hotel)
                                                    <option>{{ $hotel->hotel }}</option>
                                                @endforeach
                                        </select>

                                        <select class="search_input search_input_hotel origen_hotel" name="destino">
                                            <option selected value="null" disabled>Selecciona un hotel</option>
                                                @foreach($hoteles as $hotel)
                                                    <option>{{ $hotel->hotel }}</option>
                                                @endforeach
                                        </select>
                                        <select class="search_input search_input_hotel destino_airline" name="origen">
                                            <option selected value="null" disabled>Selecciona una aerolinea</option>
                                                @foreach($airlines as $airline)
                                                    <option>{{ $airline->airline }}</option>
                                                @endforeach
                                        </select>
                                <input type="text"
                                    class="search_input search_input_3 selector"
                                    placeholder="{{ __('fecha') }}"
                                    name="date"
                                    required="required">
                                <input type="text"
                                    class="search_input search_input_3 timer"
                                    placeholder="{{ __('hora') }}"
                                    name="pickup"
                                    required="required">
                                <input type="text"
                                    class="search_input search_input_4"
                                    placeholder="{{ __('passenger') }}"
                                    name="passengers"
                                    required="required">
                            </div>
                            <div class="mt-2 d-flex
                            flex-lg-row
                            flex-column
                            align-items-start
                            justify-content-lg-between
                            justify-content-start">
                            <div class="form-check form-check-inline col-md-5">
                                <input class=" form-check-input checkmark" type="checkbox" name="retorno" id="retorno">
                                <label class="search_input_text form-check-label" for="inlineCheckbox1">Incluir regreso</label>
                            </div>
                                <input type="hidden"
                                    class="search_input search_input_6 selector"
                                    placeholder="{{ __('fecha') }}"
                                    id="date_comeback">
                                <input type="hidden"
                                    class="search_input search_input_3 timer"
                                    placeholder="{{ __('hora') }}"
                                    id="time_comeback">
                                <button type="submit" class="home_search_button">{{ __('buscar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
