

$(function () {
    $("input[name='quantity']").on('change', function (e) {
        conversionPrice(e);
        updateTotalPrice();
    });
});


/**
 *  Переход на главную страницу
 */
$(function () {
    $('#pageBack').on('click', function () {
        document.location.href = "http://brandshop/";
    });
});



$(function () {
    $("input[name='quantity']").on('change', );
});


/**
 * Подсчет стоимости купленного товара
 * 
 * @param integer itemId ID продукта 
 */
function conversionPrice(e) {
    var itemId = e.target.getAttribute('data-cart-item-id');

    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('data-value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html('$' + itemRealPrice);
}


/**
 * Подсчет общей стоимости товаров 
 */
function updateTotalPrice() {

    var totalPrice = 0;

    $('[data-id=itemRealPrice]').each(function () {
        totalPrice += parseInt(this.innerText.match(/\d+/));
    })
    
    $('#grandTotalPrice').html('$' + totalPrice);
    $('#subTotalPrice').html('$' + totalPrice);
}