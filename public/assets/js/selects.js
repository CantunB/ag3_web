$(document).ready(function(){
    services = $('#services').select2({
        placeholder: "Selecciona un servicio",
        theme: 'bootstrap-5',
    });

    destino_hotel = $('.destino_hotel_select').select2({
        theme: 'bootstrap-5'
    });

    origen_hotel = $('.origen_hotel_select').select2({
        theme: 'bootstrap-5'
    });

    countries = $('#countries').select2({
        theme: 'bootstrap-5',
    });

    states = $('#states').select2({
        theme: 'bootstrap-5',
    });

});
