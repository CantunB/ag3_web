$("#cash_submit").click(function(e) {
    const location = window.location.origin;
    const urlPaymentPay = location + '/'+ lenguaje() + '/booking/payment'
    const urlVoucherPDF = location + '/'+ lenguaje() + '/booking/pdf/voucher'
    const urlIndex = location + '/' + lenguaje()
    e.preventDefault();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn m-2 btn-success',
        cancelButton: 'btn  m-2 btn-secondary'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: locale_translate()[0],
        text: locale_translate()[1],
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: locale_translate()[2],
        confirmButtonColor: '#3085d6',
        cancelButtonText: locale_translate()[3],
        allowOutsideClick: false,
        allowEscapeKey: false,
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                imageUrl: 'https://1.bp.blogspot.com/-a8mhRZqntj4/WuMnvABJUwI/AAAAAAADcxQ/yRg6wAzZKHct-lSyiH81mZF5vLU5SzF5ACLcBGAs/s1600/inboxiconanimation_30.gif',
                imageAlt: 'Completando reserva',
                title: locale_translate()[4],
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 16000,
                allowEscapeKey: false,
                didOpen: () => {
                    $.ajax({
                        type: "POST",
                        url: urlPayment, //"{!! route('payment',app()->getLocale()) !!}",
                        data:  $('#booking_form,#payment_form').serialize(),
                        dataType: "json",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function(response){
                           //console.log('Formulario enviado');

                        Swal.fire({
                            title: locale_translate()[5],
                            text: locale_translate()[6], //response.data,
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonText: locale_translate()[7],
                            cancelButtonText: locale_translate()[8],
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
                                    url:urlVoucherPDF, //"{!! route('voucher', app()->getLocale()) !!}",
                                    data: response.data,
                                    xhrFields: {
                                        responseType: 'blob'
                                    },
                                    success: function(response){
                                        var blob = new Blob([response]);
                                        var link = document.createElement('a');
                                        link.href = window.URL.createObjectURL(blob);
                                        link.download = locale_translate()[9]+".pdf";
                                        link.click();
                                    },
                                    error: function(blob){
                                        console.log(blob);
                                    }
                                });
                                let timerInterval
                                Swal.fire({
                                    title: locale_translate()[10],
                                    html: locale_translate()[11],
                                    timer: 2500,
                                    timerProgressBar: true,
                                    allowOutsideClick: false,

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
                                        title: locale_translate()[12],
                                        text: locale_translate()[13],
                                        confirmButtonText: locale_translate()[14],
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
                                    title: locale_translate()[12],
                                    text: locale_translate()[13],
                                    icon: 'success',
                                    confirmButtonText: locale_translate()[14],
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
                                allowOutsideClick: false,

                            });
                        }
                    });
                }
            })
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                icon: 'question',
                title: locale_translate()[16],
                text: locale_translate()[17],
            })
        }
    })
});
