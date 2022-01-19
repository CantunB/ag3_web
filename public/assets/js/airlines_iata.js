
$(document).ready(function () {
    $('.airlines_arrival').on('change', function () {
        var airline = this.value;
        $("#flight-number").html('');
        const location = window.location.origin;
        const getcode = location + '/es/getCodeIATA'
        //Mostramos los valores en consola:
        //var userLanguage = window.navigator.userLanguage || window.navigator.language;
        $.ajax({
            url: getcode,               //"{{route('fetchState', app()->getLocale())}}",
            type: "POST",
            data: {
                airline: airline,
                //_token: '{{csrf_token()}}'
            },
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (result) {
                var iata_code = result.code['iata_code'];
                $(".flight-number_arrival").val(iata_code);
            }
        });
    });

    $('.airlines_departure').on('change', function () {
        var airline = this.value;
        $("#flight-number").html('');
        const location = window.location.origin;
        const getcode = location + '/es/getCodeIATA'
        //Mostramos los valores en consola:
        //var userLanguage = window.navigator.userLanguage || window.navigator.language;
        $.ajax({
            url: getcode,               //"{{route('fetchState', app()->getLocale())}}",
            type: "POST",
            data: {
                airline: airline,
                //_token: '{{csrf_token()}}'
            },
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (result) {
                var iata_code = result.code['iata_code'];
                $(".flight-number_departure").val(iata_code);
            }
        });
    });
});
