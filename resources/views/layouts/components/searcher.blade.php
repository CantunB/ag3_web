<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Search for your trip</div>
                    <div class="home_search_content">
                        <form action="search_form" class="home_search_form" id="home_search_form">
                            <div
                                class=" d-flex
                                    flex-lg-row
                                    flex-column
                                    align-items-start
                                    justify-content-lg-between
                                    justify-content-start">
                                        <input type='text'
                                            placeholder='{{ __('hoteles') }}'
                                            class='search_input search_input_hotel flexdatalist_hotels'
                                            data-data='http://127.0.0.1:8001/api/getdata/hotels'
                                            data-search-in='hotel'
                                            data-selection-required='true'
                                            data-min-length='1'
                                            name='country_name_required_selection' required="required">
                                        <input type='text'
                                            placeholder='{{ __('aerolineas') }}'
                                            class='search_input search_input_airlines flexdatalist_airlines'
                                            data-data='http://127.0.0.1:8001/api/getdata/airlines'
                                            data-search-in='airline'
                                            data-selection-required='true'
                                            data-min-length='1'
                                            name='country_name_required_selection' required="required">
                                <input type="text"
                                    class="search_input search_input_3 selector"
                                    placeholder="{{ __('fecha') }}"
                                    required="required">
                                <input type="text"
                                    class="search_input search_input_3 timer"
                                    placeholder="{{ __('hora') }}"
                                    required="required">
                                <input type="text"
                                    class="search_input search_input_4"
                                    placeholder="{{ __('passenger') }}"
                                    required="required">
                                    <button class="home_search_button">{{ __('buscar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
