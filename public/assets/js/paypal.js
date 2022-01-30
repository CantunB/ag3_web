    const locationHost = window.location.origin;
    const urlPayment = locationHost + '/'+ lenguaje() + '/booking/payment'
    const urlVoucherPDF = locationHost + '/'+ lenguaje() + '/booking/pdf/voucher'
    const urlIndex = locationHost + '/' + lenguaje()

var price = $("#price_mx").val();
// var divisa = $("#divisa").val();
paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({
        purchase_units: [{
            label: 'Reserva AG3 Luxury Travel',
            amount: {
            value:price,
            // currency_code: divisa,
            },
        }]
        });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        //alert('Transaction completed by ' + details.payer.name.given_name + details.id);
        form = $('#booking_form,#payment_form').serialize();

        Swal.fire({
            imageUrl: 'https://1.bp.blogspot.com/-a8mhRZqntj4/WuMnvABJUwI/AAAAAAADcxQ/yRg6wAzZKHct-lSyiH81mZF5vLU5SzF5ACLcBGAs/s1600/inboxiconanimation_30.gif',
            imageAlt: 'Completando reserva',
            title: 'Estamos haciendo un espacio para tu reserva...',
            showConfirmButton: false,
            timer: 15000,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
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
                        allowOutsideClick: false,
                        allowEscapeKey: false,
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
                                timer: 2500,
                                timerProgressBar: true,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                                willClose: () => {
                                clearInterval(timerInterval)
                            },
                            didClose: () => {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Volver al inicio',
                                    text: 'Gracias por elegir AG3 Luxury Travel',
                                    confirmButtonText: 'IR',
                                    confirmButtonColor: '#3085d6',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                        window.location =  urlIndex;
                                    }
                                })
                            }
                            }).then((result) => {
                              /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                                }
                            })
                        }
                        else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire({
                                title: 'Volver al inicio',
                                text: 'Gracias por elegir AG3 Luxury Travel',
                                icon: 'success',
                                confirmButtonText: 'IR',
                                confirmButtonColor: '#3085d6',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            }).then((result) => {
                            if (result.isConfirmed) {
                                    window.location =  urlIndex;
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
            }
        })

        //window.location = '{!! route('index',app()->getLocale()) !!}';
        });
    }
}).render('#paypal-button-container');
  //This function displays payment buttons on your web page.
