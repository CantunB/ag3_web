$(document).ready(function() {
        var contact_url = $('#contact_url').attr('url');
        $("#contact_form").on('submit', function(event) {
            $(this).parsley().validate();
            if ($(this).parsley().isValid()) {
                $.ajax({
                    type: "POST",
                    url: contact_url,
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
                        console.log(response.data);
                        $("#contact_form").parsley().reset();
                        $("#map_div").removeClass("col-lg-6").addClass("col-lg-12");
                        $("#contact").hide();
                    },
                    error: function(response){
                        // console.log(response);
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
