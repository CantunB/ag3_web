
<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Search for your trip</div>
                    <div class="home_search_content">
                        <form class="home_search_form" action="{{ route('vehicles',app()->getLocale()) }}" method="POST" id="form_search" autocomplete="off">
                            @csrf
                            @method('POST')
                            <div class="d-flex
                            flex-lg-row
                            flex-column
                            align-items-start
                            justify-content-lg-between
                            justify-content-start">
                                {{-- <div class="form-check form-check-inline col-md-6">
                                    <input  class="form-check-input checkmark" type="radio" name="service" value="Llegadas" >
                                    <label class="search_input_text form-check-label" for="inlineCheckbox1">Aeroline to Hotel</label>
                                </div>
                                <div class="form-check form-check-inline col-md-6">
                                    <input class="form-check-input checkmark" type="radio" name="service"  value="Salidas">
                                    <label class="search_input_text form-check-label" for="inlineCheckbox2">Hotel to Airline</label>
                                </div> --}}
                                <select name="services" id="services" required>
                                    <option selected value="null" disabled>Selecciona un servicio</option>
                                    <optgroup label="ONE WAY">
                                        <option value="1">Aeropuerto a Hotel</option>
                                        <option value="2">Hotel a Aeropuerto</option>
                                        <option value="3">Hotel a Hotel</option>
                                    </optgroup>
                                    <optgroup label="ROUND TRIP">
                                        <option value="4">Aeropuerto a Hotel a Aeropuerto</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div
                                class="mt-2 d-flex
                                    flex-lg-row
                                    flex-column
                                    align-items-start
                                    justify-content-lg-between
                                    justify-content-start">


                                    {{-- <select  class="search_input search_input_hotel origen">
                                        <option selected value="null" disabled>Selecciona un origen</option>
                                    </select> --}}

                                        {{-- <select class="search_input search_input_hotel origen_airline" name="origen">
                                            <option selected value="null" disabled>Selecciona una aerolinea</option>
                                            @foreach($airlines as $airline)
                                                <option>{{ $airline->airline }}</option>
                                            @endforeach
                                        </select> --}}
                                        <input type="text" readonly class="form-control search_input_hotel  origen_airline" name="origen" value="Aeropuerto Internacional de Cancun">

                                        <select class="search_input search_input_hotel origen_hotel" name="origen">
                                            <option selected value="null" disabled>Selecciona un hotel</option>
                                                @foreach($hoteles as $hotel)
                                                    <option>{{ $hotel->hotel }}</option>
                                                @endforeach
                                        </select>
                                        <select class="search_input search_input_hotel destino_hotel" name="destino">
                                            <option selected value="null" disabled>Selecciona un hotel</option>
                                                @foreach($hoteles as $hotel)
                                                    <option>{{ $hotel->hotel }}</option>
                                                @endforeach
                                        </select>
                                        <input type="text" readonly class="form-control search_input_hotel destino_airline" name="destino" value="Aeropuerto Internacional de Cancun">

                                        {{-- <select class="search_input search_input_hotel destino_airline" name="origen">
                                            <option selected value="null" disabled>Selecciona una aerolinea</option>
                                                @foreach($airlines as $airline)
                                                    <option>{{ $airline->airline }}</option>
                                                @endforeach --}}
                                        </select>
                                <input type="text"
                                    class="form-control search_input_3 selector"
                                    placeholder="{{ __('fecha') }}"
                                    name="date"
                                    id="date"
                                    required>
                                <input type="text"
                                    class="form-control search_input_3 timer"
                                    placeholder="{{ __('hora') }}"
                                    name="pickup"
                                    id="pickup"
                                    >

                                <input type="text"
                                    class="form-control search_input_4"
                                    placeholder="{{ __('pasajeros') }}"
                                    name="passengers"
                                    >
                            </div>
                            <div class="mt-2 d-flex
                            flex-lg-row
                            flex-column
                            align-items-start
                            justify-content-lg-between
                            justify-content-start">
                                <input  onclick="return false;" class="form-check-input checkmark" type="checkbox" name="retorno" id="retorno" value="si">
                                <label class="search_input_text form-check-label" for="retorno">&nbsp;(Selecciona la fecha y hora de tu regreso)</label>

                                <input type="hidden"
                                    class="form-control search_input_3 selector"
                                    placeholder="{{ __('fecha') }}"
                                    id="date_comeback"
                                    name="date_comeback">
                                <input type="hidden"
                                    class="form-control search_input_3 timer"
                                    placeholder="{{ __('hora') }}"
                                    id="time_comeback"
                                    name="time_comeback">
                                <button type="submit" class="home_search_button">{{ __('buscar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
