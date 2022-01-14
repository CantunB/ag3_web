    let countries = $('.countries').select2({
        theme: 'bootstrap-5',
    });

    let states = $('.states').select2({
        theme: 'bootstrap-5',
    });

$(document).ready(function() {
    $(".btnComplete").on('click', function(e){
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

        $("#request_unit").val(unitId);
        $("#type_trip").val(type_tripId);

        if (unitId == 1) {
            textUnit = "Suburban";
        }else{
            textUnit = "Van";
        }
        if (type_tripId == 1) {
            textTrip = "Sencillo";
        }else{
            textTrip = "Redondo";
        }
        $("#select_service").html(textUnit + ' ' + textTrip);
        $("#btnBooking").click(function(){
            $("#quotes_form").parsley();
            $("#quotes_form").parsley().validate();
                if ($("#quotes_form").parsley().isValid()){
                    form = $('#quotes_form').serialize();
                    var quotes_url = $('#quotes_url').attr('url');
                    // $("#btnBooking").click(function(e) {
                    //     e.preventDefault();
                    //     $.ajax({
                    //         type: "POST",
                    //         url: quotes_url,
                    //         data: form,
                    //         dataType: "json",
                    //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                    //         success: function(response){
                    //             console.log('Formulario enviado');

                    //         },
                    //         error: function(response){
                    //             console.log(response);
                    //             var errors = response.responseJSON;
                    //             errorsHtml = '<ul>';
                    //             $.each(errors.errors,function (k,v) {
                    //             errorsHtml += '<li>'+ v + '</li>';
                    //             });
                    //             errorsHtml += '</ul>';
                    //             Swal.fire({
                    //                 title: "Ooops!",
                    //                 html: errorsHtml,
                    //                 icon: "error",
                    //                 confirmButtonText: "Volver!",
                    //             });
                    //         }
                    //     });
                    // });

                }
        });
    });
});
