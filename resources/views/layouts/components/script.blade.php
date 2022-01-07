    <script src="{{ asset('assets/js/scripts/dark-mode.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/jquery.spinner.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AYh6SsC21DLPKSQlkxE4XEPxcTq6-UDo_S6xtbD0Q3l2FH1EUEoTkvPbx0YC0NWktEm1NqjhR2FhxHCT&components=buttons&currency=MXN&locale=es_MX"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script>

       // $("input[type='number']").inputSpinner();
    </script>
    <script>
        var price = $("#price").val();
        paypal.Buttons({
            createOrder: function(data, actions) {
              // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    label: 'Reserva AG3 Luxury Travel',
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
                //alert('Transaction completed by ' + details.payer.name.given_name + details.id);
                form = $('#booking_form,#payment_form').serialize();
                $.ajax({
                    type: "POST",
                    url: "{!! route('payment',app()->getLocale()) !!}",
                    data: form+'&'+$.param({
                        transaction_id : details.id,
                        status_payment: 1
                    }),
                    dataType: "json",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                    success: function(response){
                       //console.log('Formulario enviado');
                       Swal.fire({
                        title: "¿Desea descargar el comprobante de reserva?",
                        text: "Su reservación se ha realizado correctamente", //response.data,
                        icon: "success",
                        showCancelButton: true,
                        confirmButtonText: 'Descargar',
                        cancelButtonText: 'Cancelar',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        //timer: 3500
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'GET',
                                url: "{!! route('voucher', app()->getLocale()) !!}",
                                data: response.data,
                                xhrFields: {
                                    responseType: 'blob'
                                },
                                success: function(response){
                                    var blob = new Blob([response]);
                                    var link = document.createElement('a');
                                    link.href = window.URL.createObjectURL(blob);
                                    link.download = "ComprobanteAg3.pdf";
                                    link.click();
                                },
                                error: function(blob){
                                    console.log(blob);
                                }
                            });
                            let timerInterval
                            Swal.fire({
                              title: 'Descargando!',
                              html: 'Tu archivo estara listo en...  <b></b> milliseconds.',
                              timer: 5000,
                              timerProgressBar: true,
                              didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                  b.textContent = Swal.getTimerLeft()
                                }, 100)
                              },
                              willClose: () => {
                                clearInterval(timerInterval)
                              }
                            }).then((result) => {
                              /* Read more about handling dismissals below */
                              if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                              }
                            })
                        }

                    });
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
                //window.location = '{!! route('index',app()->getLocale()) !!}';

              });
            }
          }).render('#paypal-button-container');
          //This function displays payment buttons on your web page.
      </script>
      <script>
        $("#cash_submit").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{!! route('payment',app()->getLocale()) !!}",
                data:  $('#booking_form,#payment_form').serialize(),
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                success: function(response){
                   //console.log('Formulario enviado');
                Swal.fire({
                    title: "¿Desea descargar el comprobante de reserva?",
                    text: "Su reservación se ha realizado correctamente", //response.data,
                    icon: "success",
                    showCancelButton: true,
                    confirmButtonText: 'Descargar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    //timer: 3500
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'GET',
                            url: "{!! route('voucher', app()->getLocale()) !!}",
                            data: response.data,
                            xhrFields: {
                                responseType: 'blob'
                            },
                            success: function(response){
                                var blob = new Blob([response]);
                                var link = document.createElement('a');
                                link.href = window.URL.createObjectURL(blob);
                                link.download = "ComprobanteAg3.pdf";
                                link.click();
                            },
                            error: function(blob){
                                console.log(blob);
                            }
                        });
                        let timerInterval
                        Swal.fire({
                          title: 'Descargando!',
                          html: 'Tu archivo estara listo en...  <b></b> milliseconds.',
                          timer: 5000,
                          timerProgressBar: true,
                          didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                              b.textContent = Swal.getTimerLeft()
                            }, 100)
                          },
                          willClose: () => {
                            clearInterval(timerInterval)
                          }
                        }).then((result) => {
                          /* Read more about handling dismissals below */
                          if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                          }
                        })
                    }
                    //window.location = '{!! route('index',app()->getLocale()) !!}';

                });
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
        /*
        $(document).ready(function() {
            form = $("#booking_form").parsley();
            alert('formulario valido');

            $(".btnNext").on('click', function(event) {
                form.parsley().validate();

                if (form.parsley().isValid()) {
                    var selected = $("#tabs").tabs("option", "selected");
                    $("#tabs").tabs("option", "selected", selected + 1);
                }
            });

        });
*/


        $(document).ready(function() {
            $("#btnPayment").on('click', function(e){
                e.preventDefault();
                $("#booking_form").parsley();
                $("#booking_form").parsley().validate();
                if ($("#booking_form").parsley().isValid()){
                    //alert('valid');
                    //$('.btnPayment').click(function(){
                        $('#contact-tab').tab('show')
                    $('.nav-item > .active').next('li').find('a').trigger('click');
                    //});

                }
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
    <script>
        $(document).ready(function () {

            paypal = $('#paypal_opt').hide();
            cash = $('#cash_opt').hide();

            $("#img1, #img2").change(function () {
                if ($("#img1").is(":checked")) {
                    cash.show();
                    paypal.hide();
                }
                else if ($("#img2").is(":checked")) {
                    cash.hide();
                    paypal.show();
                }
                //else
                  //  $('#div3').show();
            });
        });
    </script>

<script src="{{ asset('assets/js/service_show.js') }}"></script>
