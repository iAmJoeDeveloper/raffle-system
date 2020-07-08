$( function() {
    $("#paymentMethod_id").change( function() {
        if ($(this).val() === "1") {
            $("#bank_id").prop("disabled", true);
            $("#card_id").prop("disabled", true);


            $("#ccnum").css('display', 'none');
            $("#card_id").css('display', 'none');
            $("#bank_id").css('display', 'none');


            $("#label_cc").css('display', 'none');
            $("#label_card").css('display', 'none');
            $("#label_bank").css('display', 'none');


            //Remover Clase Require
            $("#ccnum").removeClass('required');
            $("#bank_id").removeClass('required');
            $("#card_id").removeClass('required');


        } else {
            $("#bank_id").prop("disabled", false);
            $("#card_id").prop("disabled", false);


            $("#ccnum").css('display', 'block');
            $("#bank_id").css('display', 'block');
            $("#card_id").css('display', 'block');


            $("#label_cc").css('display', 'block');
            $("#label_card").css('display', 'block');
            $("#label_bank").css('display', 'block');


            //Agregar Clase Required
            $("#ccnum").addClass('required');
            $("#bank_id").addClass('required');
            $("#card_id").addClass('required')

        }
    });
});


