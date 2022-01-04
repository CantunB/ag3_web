<!-- Bootstrap v5.0.2 -->
<script src="{{ asset('assets/js/scripts/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts/bootstrap.min.js') }}"></script>

<!-- Typed.js v2.0.12 -->
<script src="{{ asset('assets/js/scripts/typed.js') }}"></script>

<!-- Main.js  -->
<script src="{{ asset('assets/js/scripts/main.js') }}"></script>

<!-- jQuery v3.6.0 -->
<script src="{{ asset('assets/js/scripts/jquery.min.js') }}"></script>

<!-- Select2 v4.0.13 -->
<script src="{{ asset('assets/js/scripts/select2.full.min.js') }}"></script>

{{-- kit fontawesome --}}
<script src="{{ asset('assets/js/scripts/41bcea2ae3.js') }}"></script>

<!-- flatpickr v4.6.9 -->
<script src="{{ asset('assets/js/scripts/flatpickr.js') }}"></script>

<script>
    $(".selector").flatpickr({
            minDate: "today",
            dateFormat: "d-m-Y",
        });
    $(".timer").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "h:i K",
    });
</script>

<script>
    $(document).ready(function(){
        $("#date").removeAttr("readonly", false);
        $("#pickup").removeAttr("readonly", false);
        $("#time_comeback").removeAttr("readonly", false);
        $("#date_comeback").removeAttr("readonly", false);
        $("#date_comeback").hide();
        $("#time_comeback").hide();
        /* $('#retorno').on('change',function(){
        if (this.checked) {
            $("#date_comeback").show();
            $("#time_comeback").show();
        } else {
            $("#date_comeback").hide();
            $("#time_comeback").hide();
        }
        }) */
        $('#services').on('change',function(){
            if ($("#services option:selected").val() == 4) {
                $("#date_comeback").show();
                $("#time_comeback").show();
            } else {
                $("#date_comeback").hide();
                $("#time_comeback").hide();
            }
            })
    });
</script>

<script>
    $(document).ready(function(){
        $('.destino_hotel_select').select2({
            placeholder: "Selecciona un hotel",
            theme: 'bootstrap-5'
        });

        $('.origen_hotel_select').select2({
            placeholder: "Selecciona un hotel",
            theme: 'bootstrap-5'
        });
    });
</script>

<script>
    $(document).ready(function(){

        $('#services').select2({
            placeholder: "Selecciona un servicio",
            theme: 'bootstrap-5',
        });
        
        // jQuery(".origen_hotel").select2().next().hide();
        // jQuery(".destino_hotel").select2().next().hide();
        jQuery(".origen_hotel").hide();
        jQuery(".destino_hotel").hide();

        $(".origen_airline").hide();
        $(".destino_airline").hide();

        $('#retorno').prop('checked', false);

        $('#form_search select').on('change', function() {
            var service = $("#services option:selected").val();
            //alert(service);
            switch(service){
                case('1'):
                /** AEROPUERTO A HOTEL */
                    // $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");

                    if ($("#services option:selected").val() == 1) {
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");

                        // $(".origen_airline").show();
                        $('.destino_hotel').show().removeClass("col-lg-4").addClass("col-lg-3");
                        $("#date-content").removeClass("offset-lg-2");
                        $("#passengers-content").removeClass("offset-lg-1");

                        // jQuery('.origen_hotel').css('display', 'none');
                        // $('#retorno').attr("disabled",true).prop('checked', false);
                        // $(".destino_airline").attr("disabled",true).hide();

                        $("#search-content").removeClass("col-lg-2").addClass("col-lg-2 offset-lg-5");
                    }

                    $(".origen_airline").show();
                    // $('.destino_hotel').select2({
                    //     placeholder: "Selecciona un hotel",
                    //     theme: 'bootstrap-5',

                    // });

                    // $('.destino_hotel').show();

                    // jQuery(".origen_hotel").select2().next().hide();
                    // jQuery(".origen_hotel").hide();
                    jQuery('.origen_hotel').css('display', 'none');


                    $('#retorno').attr("disabled",true).prop('checked', false);
                    $(".destino_airline").attr("disabled",true).hide();

                    // $("#search-content").addClass("offset-lg-5");

                    break;
                case('2'):
                /** HOTEL AL AEROPUERTO */
                    // $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");

                    if ($("#services option:selected").val() == 2) {
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-3");

                        $('.origen_hotel').show().removeClass("col-lg-4").addClass("col-lg-3");
                        $("#date-content").removeClass("offset-lg-2");
                        $("#passengers-content").removeClass("offset-lg-1");
                        $("#search-content").removeClass("col-lg-2").addClass("col-lg-2 offset-lg-5");
                    }

                    // $('.origen_hotel').select2({
                    //     placeholder: "Selecciona un hotel",
                    //     theme: 'bootstrap-5',

                    // });
                    
                    // $('.origen_hotel').show();

                    $(".destino_airline").show();
                    $(".origen_airline").attr("disabled",true).hide();


                    // jQuery(".destino_hotel").select2().next().hide();
                    // jQuery(".destino_hotel").hide();
                    jQuery('.destino_hotel').css('display', 'none')

                    $('#retorno').attr("disabled",true).prop('checked', false);

                    // $("#search-content").addClass("offset-lg-5");
                    break;
                case('3'):
                /** HOTEL AL HOTEL */
                    // $('.origen_hotel').select2({
                    //     placeholder: "Selecciona un hotel",
                    //     theme: 'bootstrap-5',

                    // });

                    if ($("#services option:selected").val() == 3) {
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-4");
                        $("#passengers-content").removeClass("offset-lg-1");
                        $('.destino_hotel').show().removeClass("col-lg-3").addClass("col-lg-4");
                        $('.origen_hotel').show().removeClass("col-lg-3").addClass("col-lg-4");

                        $("#date-content").addClass("offset-lg-2")

                        $("#search-content").removeClass("offset-lg-5").addClass("col-lg-2");
                    }

                    // $('.destino_hotel').select2({
                    //     placeholder: "Selecciona un hotel",
                    //     theme: 'bootstrap-5',

                    // });

                    

                    $(".origen_airline").attr("disabled",true).hide();
                    $(".destino_airline").attr("disabled",true).hide();
                    $('#retorno').attr("disabled",true).prop('checked', false);

                    break;
                case('4'):
                /** AEROPUERTO A HOTEL AL AEROPUERTO */
                    // $('.destino_hotel').select2({
                    //     placeholder: "Selecciona un hotel",
                    //     theme: 'bootstrap-5',

                    // });

                    if ($("#services option:selected").val() == 4) {
                        $("#services-content").removeClass("col-lg-4").addClass("col-lg-4");
                        $('.destino_hotel').show().removeClass("col-lg-3").addClass("col-lg-4");
                        $("#date-content").removeClass("offset-lg-2");
                        $("#search-content").removeClass("offset-lg-5").addClass("col-lg-2");
                    }

                    // $('.destino_hotel').show().removeClass("col-lg-3").addClass("col-lg-4");

                    jQuery('.origen_hotel').css('display', 'none')

                    $(".origen_airline").attr("disabled",false).hide();
                    $(".destino_airline").attr("disabled",true).hide();
                    $('#retorno').prop('checked', true);

                    $("#date_comeback").removeClass("col-lg-2").addClass("col-lg-3");
                    $("#time_comeback").removeClass("col-lg-2").addClass("col-lg-3");
                    $("#passengers-content").addClass("offset-lg-1");
                    break;
                case('5'):
                /** TRASLADO **/
                    // jQuery(".origen_hotel").select2().next().hide();
                    // jQuery(".destino_hotel").select2().next().hide();
                    if ($("#services option:selected").val() == 5) {
                        $("#services-content").removeClass("col-lg-3").addClass("col-lg-4");
                        // $('.destino_hotel').show().removeClass("col-lg-3").addClass("col-lg-4");
                        $("#date-content").removeClass("offset-lg-2");
                        $("#passengers-content").removeClass("offset-lg-1");
                        $("#search-content").removeClass("offset-lg-5").addClass("col-lg-2");
                    }

                    jQuery(".origen_hotel").hide();
                    jQuery(".destino_hotel").hide();


                    $(".origen_airline").attr("disabled",true).hide();
                    $(".destino_airline").attr("disabled",true).hide();
                    break;
            }
        });
    });
</script>

