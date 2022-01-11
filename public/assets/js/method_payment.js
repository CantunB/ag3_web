$(document).ready(function () {

    paypal = $('#paypal_opt').hide();
    cash = $('#cash_opt').hide();

    $("#img1, #img2").change(function () {
        if ($("#img1").is(":checked")) {
            cash.show();
            paypal.hide();
        }
        else if ($("#img2").is(":checked")) {
            cash.hide();
            paypal.show();
        }
        //else
          //  $('#div3').show();
    });
});
