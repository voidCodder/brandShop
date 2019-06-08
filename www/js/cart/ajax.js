/**
 * Функция удаления товара из корзины
 * 
 * @param integer itemId ID продукта
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
$(function () {
    $('.cart__items, .purchases-table-wrap').on('click', '.cart-item-remove', function removeFromCart(e) {
        var itemId = e.target.getAttribute('data-cart-item-remove-id');
        var itemSize = e.target.getAttribute('data-cart-item-remove-size');

        postData = {
            itemId: itemId,
            itemSize: itemSize
        }
        $.ajax({
            method: 'POST',
            url: "/cart/removefromcart/",
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    $('[data-id=' + itemId + itemSize + ']').hide('slow');
                    //задержка удаления, для анимации
                    setTimeout(function () {
                        $('[data-id=' + itemId + itemSize + ']').remove();
                    }, 600);
                    

                    //общее кол-во в хедер-корзине
                    $('.cart-cnt-items').html(data['cntItems']);


                    //>изменение totalPrice в cart
                    var cnt = parseInt($('[data-id=' + itemId + itemSize + ']').find('[data-cart-item-cnt]').text());
                    var price = parseInt($('[data-id=' + itemId + itemSize + ']').find('[data-cart-item-price]').text().match(/\d+/));
                    var totalPrice = parseInt($('#cart-totalPrice').text().match(/\d+/));
                    var endTotal = totalPrice - (price * cnt);
                    $('#cart-totalPrice').html('$' + endTotal);
                    //<

                    //>Если нет товаров, то вывести надпись
                    setTimeout(function () {
                        if ($('[data-id]').length == 0) { 
                            if ($('.dropdown__cart').children('.cart-emptyItem')) {
                                $('.dropdown__cart .cart-emptyItem').show();
                            } else { //если изначально нет надписи
                                $('.dropdown__cart .cart-emptyItem').append('<span class="emptyItem cart-emptyItem">Cart empty</span>');
                            }
                        }
                    }, 601);
                    //<
                    
                   
                }
            }
        });
    
    });
    
});


/**
 * Функция Очистки корзины
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
$(function () {
    $('#clearCart').on('click', function clearCart() {

        $.ajax({
            method: 'POST',
            url: "/cart/clearcart/",
            dataType: 'json',
            success: function (data) {
                if (data['success']) {
                    $('[data-id]').hide('slow');

                    //общее кол-во в хедер-корзине
                    $('.cart-cnt-items').html(data['cntItems']);
                }
            }
        });
    
    });
    
});


/**
 * Функция перехода в заказы
 *  
 * @param array itemsCnt - массив размеров
 */
$(function () {
    $('#go-to-checkout-btn').on('click', function () {

        var arItemsCnt = []; //массив кол-ва товаров

        $("input:text[name='quantity']").each(function (index) {
            arItemsCnt[index] = $(this).val(); 
        });

        var getData = {
				itemsCnt: arItemsCnt
        }
        
        //обьект в URL 
        var getDataToUrl = $.param(getData);
        window.location.assign(window.location.pathname +'order/'+ "?" + getDataToUrl + '');
    
    });
    
});