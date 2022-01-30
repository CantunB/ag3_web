$(document).ready(function(){

        //AEROPUERTO Y TRASLADOS
        origen_default = $("#origen_default");
        destino_default = $("#destino_default");
        //HOTELES
        origen_hotel = $("#origen_hotel");
        destino_hotel = $("#destino_hotel");
        //TIEMPOS Y FECHAS
        date_content = $("#date-content");

        time_content = $("#time-content");

        date_comeback = $("#date_comeback");

        time_comeback = $("#time_comeback");
        //PASAJEROS
        passengers = $("#passengers-content");
        //BOTON BUSCAR
        button = $("#button-search");

        // Se declaran los inputs y selects ocultos
        origen_default.hide();
        destino_default.hide();
        origen_hotel.hide();
        destino_hotel.hide();
        date_comeback.hide();
        time_comeback.hide();
        $('#retorno').prop('checked', false);
        $('#form_search select').on('change', function() {
            var service = $("#services option:selected").val();
            //alert(service);
            switch(service){
                case('1'):
                /** AEROPUERTO A HOTEL */
                    // Elementos visibles y configuraciones de adaptacion
                    $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");
                    $("#origen_input_default").attr("readonly", true).val("Aeropuerto Internacional de Cancun");
                    destino_hotel.show().removeClass("col-lg-4").addClass("col-lg-3");
                    date_content.removeClass("offset-lg-2");
                    passengers.removeClass("offset-lg-1");
                    button.removeClass("col-lg-2").addClass("col-lg-2 offset-lg-5");
                    // Elementos ocultos
                    origen_default.hide();
                    destino_default.hide();
                    origen_hotel.hide();
                    date_comeback.hide();
                    time_comeback.hide();
                    $('#retorno').attr("disabled",true).prop('checked', false);
                    break;
                case('2'):
                /** HOTEL AL AEROPUERTO */
                    // Elementos visibles y configuraciones de adaptacion
                    $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");
                    origen_hotel.show().removeClass("col-lg-4").addClass("col-lg-3");
                    $("#destino_input_default").attr("readonly", true).val("Aeropuerto Internacional de Cancun");
                    date_content.removeClass("offset-lg-2");
                    passengers.removeClass("offset-lg-1");
                    button.removeClass("col-lg-2").addClass("col-lg-2 offset-lg-5");
                    // Elementos ocultos
                    destino_hotel.hide();
                    origen_default.hide();
                    destino_default.hide();
                    date_comeback.hide();
                    time_comeback.hide();
                    $('#retorno').attr("disabled",true).prop('checked', false);
                    // $("#search-content").addClass("offset-lg-5");
                    break;
                case('3'):
                /** HOTEL AL HOTEL */
                    // Elementos visibles y configuraciones de adaptacion
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-4");
                        origen_hotel.show().removeClass("col-lg-3").addClass("col-lg-4");
                        destino_hotel.show().removeClass("col-lg-3").addClass("col-lg-4");
                        passengers.removeClass("offset-lg-1");
                        date_content.addClass("offset-lg-2")
                        button.removeClass("offset-lg-5").addClass("col-lg-2");
                    // Elementos ocultos
                    origen_default.hide();
                    destino_default.hide();
                    date_comeback.hide();
                    time_comeback.hide();
                    $('#retorno').attr("disabled",true).prop('checked', false);
                    break;
                case('4'):
                /** AEROPUERTO A HOTEL AL AEROPUERTO */
                    // Elementos visibles y configuraciones de adaptacion
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-4");
                        $("#origen_input_default").attr("readonly", true).val("Aeropuerto Internacional de Cancun");
                        destino_hotel.show().removeClass("col-lg-3").addClass("col-lg-4");
                        date_content.removeClass("offset-lg-2");
                        $('#retorno').prop('checked', true);
                        date_comeback.show().removeClass("col-lg-2").addClass("col-lg-3");
                        time_comeback.show().removeClass("col-lg-2").addClass("col-lg-2");
                        passengers.addClass("offset-lg-1");
                        button.removeClass("offset-lg-5").addClass("col-lg-2");
                    // Elementos ocultos
                        origen_hotel.hide();
                        origen_default.hide();
                        destino_default.hide();
                    break;
                case('5'):
                /** TRASLADO **/
                    // Elementos visibles y configuraciones
                        $("#services-content").removeClass("col-lg-3").addClass("col-lg-4");
                        origen_default.show();
                        $("#origen_input_default").attr("readonly", false).val("");
                        destino_default.show();
                        $("#destino_input_default").attr("readonly", false).val("");
                        date_content.addClass("offset-lg-2");
                        passengers.removeClass("offset-lg-1");
                        button.removeClass("offset-lg-5").addClass("col-lg-2");
                    // Elementos ocultos
                    origen_hotel.hide();
                    destino_hotel.hide();
                    date_comeback.hide();
                    time_comeback.hide();
                    break;
            }
        });
    });
