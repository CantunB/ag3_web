

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/jquery.spinner.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=AZfbozolttQGU4sqSlcmNdK6b3BTPv4YatStoNybGLwfksLwUYgeO2y1Ufq2miZqy31Hr-FXWpMeKDJO"></script>
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
              // This function sets up the details of the transaction, including the amount and line item details.
              return actions.order.create({
                purchase_units: [{
                  amount: {
                    value: '80.00'
                  }
                }]
              });
            },
            onApprove: function(data, actions) {
              // This function captures the funds from the transaction.
              return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
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
            minDate: "today"
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
        $('#contact_form').parsley();
    </script>
    <script>
        $(document).ready(function () {
            $(".form-spinner input").each(function (i, spinner) {
                if ($(this).data("type") === "text") {
                    let index = $(this).data("spinner-index") || 0;
                    let items = $(this).data("spinner-items");

                    $(this).val(items[index]);
                }
            });

            $(".form-spinner .btn-increment").click(function () {
                let $this		= $(this);
                let input		= $this.siblings("input");

                if (input.data("type") === "number") {
                    let step		 = input.attr("step");
                    let oldValue = input.val();
                    let newValue = parseInt(oldValue) + parseInt(step || 1);
                    let maxValue = input.attr("max");
                    let minValue = input.attr("min");

                    if (!maxValue || newValue <= maxValue)
                        input.val(newValue);
                    else if (input.data("spinner-loop"))
                        input.val(minValue);
                    else
                        input.val(maxValue);
                } else if (input.data("type") === "text") {
                    let oldIndex = input.data("spinner-index") || 0;
                    let items 	 = input.data("spinner-items");
                    let newIndex = oldIndex + 1;

                    if (newIndex < items.length) {
                        input.val(items[newIndex]);
                        input.data("spinner-index", newIndex);
                    } else if (input.data("spinner-loop")){
                        input.val(items[0]);
                        input.data("spinner-index", 0);
                    }
               }

            });
            $(".form-spinner .btn-decrement").click(function () {
                let $this		= $(this);
                let input		= $this.siblings("input");

                if (input.data("type") === "number") {
                    let step		 = input.attr("step");
                    let oldValue = input.val();
                    let newValue = parseInt(oldValue) - parseInt(step || 1);
                    let maxValue = input.attr("max");
                    let minValue = input.attr("min");

                    if (!minValue || newValue >= minValue)
                        input.val(newValue);
                    else if (input.data("spinner-loop"))
                        input.val(maxValue);
                    else
                        input.val(minValue);
                } else if (input.data("type") === "text") {
                    let oldIndex = input.data("spinner-index") || 0;
                    let items 	 = input.data("spinner-items");
                    let newIndex = oldIndex - 1;

                    if (newIndex >= 0) {
                        input.val(items[newIndex]);
                        input.data("spinner-index", newIndex);
                    } else if (input.data("spinner-loop")){
                        input.val(items[items.length - 1]);
                        input.data("spinner-index", items.length - 1);
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#date_comeback").hide();
            $("#time_comeback").hide();
            $('#retorno').on('change',function(){
            if (this.checked) {
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
            $('.origen').select2({
                placeholder: "Selecciona una aerolinea",
                theme: "classic",
            });
            $('.destino').select2({
                placeholder: "Selecciona una aerolinea",
                theme: "classic",
            });
            jQuery(".origen_airline").select2().next().hide();
            jQuery(".destino_hotel").select2().next().hide();
            jQuery(".origen_hotel").select2().next().hide();
            jQuery(".destino_airline").select2().next().hide();
            $('#form_search input').on('change', function() {
                var service = $('input[name=service]:checked', '#form_search').val();
                switch(service){
                    case('Llegadas'):
                        $('.origen_airline').select2({
                            placeholder: "Selecciona una aerolinea",
                            theme: "classic",
                        });

                        $('.destino_hotel').select2({
                            placeholder: "Selecciona una aerolinea",
                            theme: "classic",
                        });

                        jQuery(".origen").select2().next().hide();
                        jQuery(".destino").select2().next().hide();
                        jQuery(".origen_hotel").select2().next().hide();
                        jQuery(".destino_airline").select2().next().hide();
                        break;
                    case('Salidas'):
                        $('.origen_hotel').select2({
                            placeholder: "Selecciona una aerolinea",
                            theme: "classic",

                        });
                        $('.destino_airline').select2({
                            placeholder: "Selecciona una aerolinea",
                            theme: "classic",
                        });

                        jQuery(".origen").select2().next().hide();
                        jQuery(".destino").select2().next().hide();
                        jQuery(".origen_airline").select2().next().hide();
                        jQuery(".destino_hotel").select2().next().hide();
                        break;
                }
            });
        });
    </script>
@yield('scripts')


