

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/parsley.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script src="{{ asset('assets/js/jquery.spinner.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AYh6SsC21DLPKSQlkxE4XEPxcTq6-UDo_S6xtbD0Q3l2FH1EUEoTkvPbx0YC0NWktEm1NqjhR2FhxHCT&components=buttons&currency=MXN&locale=es_MX"></script>
    <script>
        var price = $("#price").val();
        paypal.Buttons({
            createOrder: function(data, actions) {
              // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                    value: price
                    }
                }]
                });
            },
            onApprove: function(data, actions) {
              // This function captures the funds from the transaction.
              return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                //alert('Transaction completed by ' + details.payer.name.given_name);
                $.ajax({
                    type: "POST",
                    url: "{!! route('payment',app()->getLocale()) !!}",
                    data:  $("#booking_form").serialize(),
                    dataType: "json",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                    success: function(response){
                       //console.log('Formulario enviado');
                        Swal.fire({
                            title: "Reservacion!",
                            text: response.data,
                            icon: "success",
                            timer: 3500
                        });
                    //window.location = '{!! route('index',app()->getLocale()) !!}';
                    },
                    error: function(response){
                        console.log(response);
                        var errors = response.responseJSON;
                        errorsHtml = '<ul>';
                        $.each(errors.errors,function (k,v) {
                        errorsHtml += '<li>'+ v + '</li>';
                        });
                        errorsHtml += '</ul>';
                        Swal.fire({
                            title: "Ooops!",
                            html: errorsHtml,
                            icon: "error",
                            confirmButtonText: "Volver!",
                        });
                    }
                });
              });
            }
          }).render('#paypal-button-container');
          //This function displays payment buttons on your web page.
      </script>
    <script>
        var numberSpinner = (function() {
            $('.number-spinner>.ns-btn>a').click(function() {
            var btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;

            if (btn.attr('data-dir') === 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
                btn.closest('.number-spinner').find('input').val(newVal);
            });
            $('.number-spinner>input').keypress(function(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
            });
        })();
    </script>
    <script>
        $(".selector").flatpickr({
            minDate: "today",
        });
        $(".timer").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
        $("#spinner")
        .spinner('delay', 200) //delay in ms
        .spinner('changed', function(e, newVal, oldVal){
            //trigger lazed, depend on delay option.
        })
        .spinner('changing', function(e, newVal, oldVal){
            //trigger immediately
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#contact_form').parsley();
            $("#contact_form").on('submit', function(event) {
                $(this).parsley().validate();
                if ($(this).parsley().isValid()) {
                    $.ajax({
                        type: "POST",
                        url: "{!! route('contact',app()->getLocale()) !!}",
                        data:  $("#contact_form").serialize(),
                        dataType: "json",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success: function(response){
                            Swal.fire({
                                title: "Gracias por contactarnos!",
                                text: response.data,
                                icon: "success",
                                timer: 3500
                            });
                            $('#contact_form').parsley().reset();
                            $("#contact").hide();
                        },
                        error: function(response){
                            console.log(response);
                            var errors = response.responseJSON;
                            errorsHtml = '<ul>';
                            $.each(errors.errors,function (k,v) {
                            errorsHtml += '<li>'+ v + '</li>';
                            });
                            errorsHtml += '</ul>';
                            Swal.fire({
                                title: "Ooops!",
                                html: errorsHtml,
                                icon: "error",
                                confirmButtonText: "Volver!",
                            });
                        }
                    });
                }
                event.preventDefault();
            });
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

            $('#services').select2({
                placeholder: "Selecciona un servicio",
                theme: 'bootstrap4',
            });
            jQuery(".origen_hotel").select2().next().hide();
            jQuery(".destino_hotel").select2().next().hide();
            $(".origen_airline").hide();
            $(".destino_airline").hide();

            $('#retorno').prop('checked', false);

            $('#form_search select').on('change', function() {
                var service = $("#services option:selected").val();
                //alert(service);
                switch(service){
                    case('1'):
                    /** AEROPUERTO A HOTEL */
                        $(".origen_airline").show();
                        $('.destino_hotel').select2({
                            placeholder: "Selecciona un hotel",
                            theme: 'bootstrap4',

                        });
                        jQuery(".origen_hotel").select2().next().hide();
                        $('#retorno').attr("disabled",true).prop('checked', false);
                        $(".destino_airline").attr("disabled",true).hide();
                        break;
                    case('2'):
                    /** HOTEL AL AEROPUERTO */
                        $('.origen_hotel').select2({
                            placeholder: "Selecciona un hotel",
                            theme: 'bootstrap4',

                        });
                        $(".destino_airline").show();
                        $(".origen_airline").attr("disabled",true).hide();


                        jQuery(".destino_hotel").select2().next().hide();
                        $('#retorno').attr("disabled",true).prop('checked', false);

                        break;
                    case('3'):
                    /** HOTEL AL HOTEL */
                        $('.origen_hotel').select2({
                            placeholder: "Selecciona un hotel",
                            theme: 'bootstrap4',

                        });
                        $('.destino_hotel').select2({
                            placeholder: "Selecciona un hotel",
                            theme: 'bootstrap4',

                        });
                        $(".origen_airline").attr("disabled",true).hide();
                        $(".destino_airline").attr("disabled",true).hide();
                        $('#retorno').attr("disabled",true).prop('checked', false);

                        break;
                    case('4'):
                    /** AEROPUERTO A HOTEL AL AEROPUERTO */
                        $('.destino_hotel').select2({
                            placeholder: "Selecciona un hotel",
                            theme: 'bootstrap4',

                        });
                        $(".origen_airline").attr("disabled",false).hide();
                        $(".destino_airline").attr("disabled",true).hide();
                        $('#retorno').prop('checked', true);
                        break;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#countries').select2({
                placeholder: "Selecciona un pais",
                theme: 'bootstrap-5',

            });
            $('#states').select2({
                placeholder: "Selecciona un estado",
                theme: 'bootstrap-5',

            });
            $('#airline_departure').select2({
                placeholder: "Selecciona una aerolinea",
                theme: 'bootstrap4',

            });
            $('#states').select2({
                placeholder: "Selecciona un estado",
                theme: 'bootstrap4',

            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#countries').on('change', function () {
                var idCountry = this.value;
                $("#states").html('');
                $.ajax({
                    url: "{{route('fetchState', app()->getLocale())}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#states').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#states").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // bind parsley to the form
            $("#booking_form").parsley();

            // on form submit
            $("#booking_form").on('submit', function(event) {
                // validate form with parsley.
                $(this).parsley().validate();

                // if this form is valid
                if ($(this).parsley().isValid()) {
                    // show alert message
                    $('.btnPayment').click(function(){
                        $('.nav-tabs > .active').next('li').find('a').trigger('click');
                    });
                }

                // prevent default so the form doesn't submit. We can return true and
                // the form will be submited or proceed with a ajax request.
                event.preventDefault();
            });
        });
    </script>
    <script>
        function write_name() {
            let name = document.getElementById("name").value;
            let paterno = document.getElementById("paterno").value;
            let materno = document.getElementById("materno").value;
            //Se actualiza en municipio inm
            document.getElementById("passenger_arrival").value = name + ' ' + paterno + ' ' + materno;
            document.getElementById("passenger_departure").value = name + ' ' + paterno + ' ' + materno;

        }
    </script>
