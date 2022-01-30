function validarForm(){
    $("#quotes_form").parsley();
    $("#quotes_form").parsley().validate();
    if ($("#quotes_form").parsley().isValid()){
        return true;
    }
    else
        return false;
}

$(".btnComplete").on('click', function(e){
    const locationCotizacion = window.location.origin;
    const urlCotizacion = locationCotizacion + '/'+ lenguaje() + '/booking/quotes'
    // const urlVoucherPDF = locationTour + '/'+ lenguaje() + '/booking/pdf/quotes'
    const urlIndex = locationCotizacion + '/' + lenguaje()
        e.preventDefault();
        let id = this.id;
        //Obtencion de unidad  por concatenacion de btn id
        var _unit = '#'+id+"_unit";
        var unitId = $(_unit).val();
        //Obtencion de tipo de  unidad por concatenacion de btn id
        var _type_trip = '#'+id+"_type_trip";
        var type_tripId = $(_type_trip).val();

        $('#information-tab').tab('show')
        $('.nav-item > .active').next('li').find('a').trigger('click');

        var r = $("#request_unit").val(unitId);
        $("#type_trip").val(type_tripId);

        if (unitId == 1) {
            textUnit = "Suburban";
            $('.divisa_van').remove();
        }else{
            textUnit = "Van";
            $('.divisa_sub').remove();

        }
        $("#select_service").html(textUnit);
        $("#btnBookingQuotes").click(function(e){
            if(validarForm() == true){
                e.preventDefault();
                formCotizacion = $('#quotes_form').serialize();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                    confirmButton: 'btn m-2 btn-success',
                    cancelButton: 'btn  m-2 btn-secondary'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Confirmar tu cotizacion',
                    text: "No podras cancelar el proceso!",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Si, confirmar!',
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'No, cancelar!',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            imageUrl: 'https://1.bp.blogspot.com/-a8mhRZqntj4/WuMnvABJUwI/AAAAAAADcxQ/yRg6wAzZKHct-lSyiH81mZF5vLU5SzF5ACLcBGAs/s1600/inboxiconanimation_30.gif',
                            imageAlt: 'Completando cotizacion',
                            title: 'Estamos haciendo un espacio para tu reserva...',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            timer: 16000,
                            allowEscapeKey: false,
                            didOpen: () => {
                                $.ajax({
                                    type: "POST",
                                    url: urlCotizacion,
                                    data:  formCotizacion,
                                    dataType: "json",
                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                                    success: function(response){
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
                            title: "Continua con tu cotización!",
                            text: "Puedes editar tu cotización o elegir otro servicio",
                        })
                    }
                })


            }
        });
});
