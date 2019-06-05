
/**
 * Подсчет стоимости купленного товара
 * 
 * @param integer itemId ID продукта 
 */
$(function () {
    $("input:text[name='quantity']").on('change', function conversionPrice(e) {
        var itemId = e.target.getAttribute('data-cart-item-id');

        var newCnt = $('#itemCnt_' + itemId).val();
        var itemPrice = $('#itemPrice_' + itemId).attr('data-value');
        var itemRealPrice = newCnt * itemPrice;

        $('#itemRealPrice_' + itemId).html(itemRealPrice);
    });
});


/**
 *  Переход на предыдущую страницу
 */
$(function () {
    $('#pageBack').on('click', function () {
        history.back(); 
    });
});


/**
 * Подсчет общей стоимости товаров 
 */
$(function () {
    $("input:text[name='quantity']").on('change', function updateTotalPrice() {

        var totalPrice = 0;

        $('[data-id=itemRealPrice]').each(function () {
            totalPrice += parseInt(this.innerText);
            // console.log(sum);
        })
        
        $('#grandTotalPrice').html('$' + totalPrice);
        $('#subTotalPrice').html('$' + totalPrice);
    });
});