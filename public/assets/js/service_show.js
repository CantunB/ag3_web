$(document).ready(function(){
    service = $("#type_service").val();
    switch(service) {
        case 'Aeropuerto a Hotel a Aeropuerto':
            $('.sub_sen').hide();
            $('.van_sen').hide();
        break;
        case 'Hotel a Aeropuerto':
            $('.sub_red').hide();
            $('.van_red').hide();
        break;
        case 'Tours':
            $('.sub_sen').hide();
            $('.sub_red').hide();
            $('.van_sen').hide();
        break
        default:
            $('.sub_sen').show();
            $('.van_sen').show();
            $('.sub_red').show();
            $('.van_red').show();
        }
});
