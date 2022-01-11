    const locationHost = window.location.origin;
    const urlPayment = locationHost + '/es/booking/payment'
    const urlVoucherPDF = locationHost + '/es/booking/pdf/voucher'


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
            url: urlPayment, //"{!! route('payment',app()->getLocale()) !!}",
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
                        url: urlVoucherPDF,//"{!! route('voucher', app()->getLocale()) !!}",
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
