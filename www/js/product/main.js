/**
 * Функция добавления товара в корзину
 * 
 * @param integer itemId ID продукта
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
$(function () {
    $('#addToCartBtn').on('click', function addToCart() {
        var itemId = $('#addToCartBtn').attr('data-product-id');

        var postData = {
            size: $("select[name=sizes]").val()
        };
        $.ajax({
            method: 'POST',
            url: "/cart/addtocart/" + itemId + '/',
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    $('.cart-cnt-items').html(data['cntItems']);
                }
            }
        });

    });
  

});
