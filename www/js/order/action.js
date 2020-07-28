/**
 * ПО изменению флажка login/register скрывать/показывать формы
 */
$(function () {
    //открыть блок логин
    $("#checkout-as-guest_guest").change(function() {
        if(this.checked) {
            $('#order-registerBox').hide();
            $('#order-loginBox').show("slow");
        }
    });
    //открыть блок регистрации
    $("#checkout-as-guest_register").change(function() {
        if(this.checked) {
            $('#order-loginBox').hide();
            $('#order-registerBox').show("slow");
        }
    });


    //1.Shipping

    //Если user уже залогинен
    $('#order-shipping-cont').on('submit', function (e) {
        $('#order-data-user').hide();
        $('#order-shipping-method').show('slow');
        e.preventDefault();
    });


    $('#order-data-user').on('submit', function (e) {
        if ($('#order-data-user')[0].checkValidity() && validateInput.phone.test($('input[name="phone"]').val())) {
            $('#order-data-user').hide();
            $('#order-data-user').parent('ship-nav-item__block-wrap').hide();
            $('#order-shipping-method').show('slow');
        } else {
            alert("Fill in all fields");
        }
        e.preventDefault();
    });
    $('#order-loginBox, #order-registerBox').on('submit', function (e) {
        e.preventDefault();
    });
    //2.Shipping method
    $('#order-shipping-method-cont').on('click', function () {
        if ($('input[name="shipping-methods"]:checked').length > 0) {
            $('#order-shipping-method').hide();
            $('#order-payment').show('slow');
        } else {
            alert("Select shipping method");
        }
    });
    $('#order-shipping-method-back').on('click', function () {
            $('#order-shipping-method').hide();
            $('#order-data-user').show('slow');
    });
    //3.Payment
    $('#order-payment-cont').on('click', function () {
        if ($('input[name="payment-method"]:checked').length > 0) {
            $('#order-payment').hide();
            $('#order-review').show('slow');
        } else {
            alert("Select payment method");
        }
    });
    $('#order-payment-back').on('click', function () {
            $('#order-payment').hide();
            $('#order-shipping-method').show('slow');
    });
    //4.Review
    $('#order-review-back').on('click', function () {
        $('#order-review').hide();
        $('#order-payment').show('slow');
    });

});