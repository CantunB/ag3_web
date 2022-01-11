$("#cash_submit").click(function(e) {
    const location = window.location.origin;
    const urlPayment = location + '/es/booking/payment'
    const urlVoucherPDF = location + '/es/booking/pdf/voucher'

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: urlPayment, //"{!! route('payment',app()->getLocale()) !!}",
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
                    url:urlVoucherPDF, //"{!! route('voucher', app()->getLocale()) !!}",
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
