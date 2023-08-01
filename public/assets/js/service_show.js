$(document).ready(function(){
    service = $("#type_service").val();
    switch(service) {
        case locale_translate()[18]:
            $('.sub_sen').hide();
            $('.van_sen').hide();
        break;
        case locale_translate()[19]:
            $('.sub_red').hide();
            $('.van_red').hide();
        break;
        case locale_translate()[20]:
            $('.sub_red').hide();
            $('.van_red').hide();
        break;
        case 'Tours':
            $('.sub_sen').hide();
            $('.van_sen').hide();
        break
        default:
            $('.sub_sen').show();
            $('.van_sen').show();
            $('.sub_red').show();
            $('.van_red').show();
        }
});
