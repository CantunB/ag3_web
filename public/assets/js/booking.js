$(document).ready(function() {
    $("#btnPayment").on('click', function(e){
        e.preventDefault();
        $("#booking_form").parsley();
        $("#booking_form").parsley().validate();
        if ($("#booking_form").parsley().isValid()){
            //alert('valid');
            //$('.btnPayment').click(function(){
            $('#payment-tab').tab('show')
            $('.nav-item > .active').next('li').find('a').trigger('click');
            //});

        }
    });
});
