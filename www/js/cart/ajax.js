/**
 * Функция удаления товара из корзины
 * 
 * @param integer itemId ID продукта
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
$(function () {
    $('.cart-item-remove').on('click', function removeFromCart(e) {
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

                    //общее кол-во в хедер-корзине
                    $('.cart-cnt-items').html(data['cntItems']);
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