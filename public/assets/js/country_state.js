
$(document).ready(function () {
    $('#countries').on('change', function () {
        var idCountry = this.value;
        $("#states").html('');
        const location = window.location.origin;
        const getCity = location + '/es/getState'
        //Mostramos los valores en consola:
        //var userLanguage = window.navigator.userLanguage || window.navigator.language;
        $.ajax({
            url: getCity,               //"{{route('fetchState', app()->getLocale())}}",
            type: "POST",
            data: {
                country_id: idCountry,
                //_token: '{{csrf_token()}}'
            },
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
