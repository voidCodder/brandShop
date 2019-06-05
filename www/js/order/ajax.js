/**
 * Сохранение заказа
 * 
 */
$(function () {
   
    $('#save-order-btn').on('click', function saveOrder() {
        var postData = getData('#order-data-user');
        $.ajax({
            method: 'POST',
            url: "/cart/saveorder/",
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    alert(data['message']);
                    document.location = '/';
                } else {
                    alert(data['message']);
                }
            }
        });
    });

});