/**
 * ПО изменению флажка login/register скрывать/показывать формы
 */
$(function () {
    
    $("#checkout-as-guest_guest").change(function() {
        if(this.checked) {
            $('#order-registerBox').hide();
            $('#order-loginBox').show("slow");
        }
    });

    $("#checkout-as-guest_register").change(function() {
        if(this.checked) {
            $('#order-loginBox').hide();
            $('#order-registerBox').show("slow");
        }
    });

});