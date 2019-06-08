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

                    //если добавили товара, то убираем "корзина пуста"
                    if ($('.dropdown__cart').children('.cart-emptyItem')) {
                        $('.dropdown__cart .cart-emptyItem').hide();
                    }

                    var strItem = itemId + postData.size;

                    //значения продукта на странице /product/
                    var itemProduct = {
                        img_src: $('#product-bigImage').attr('src'),
                        img_alt: $('#product-bigImage').attr('alt'),
                        brand: $('#product-brand').text(),
                        name: $('#product-name').text(),
                        price: parseInt($('#product-price').text()),
                    } 
                    

                    var i = 0;
                    $('.cart-item').each(function () {
                        //если есть элемент, то +1
                        if ($(this).attr('data-id') == strItem) {
                            var item = $(this).find('[data-cart-item-cnt]'); item.html(+item.text() + 1);
                            
                            i=1;
                        }

                    });

                    //Если не нашел элменет, то добавляем его блок
                    if (i == 0) {

                        $('.cart__items').append('<div class="cart-item" data-id=' + strItem + '>                               <div class="cart__item flex">                           <a href="/product/'+ itemId +'/">                   <img src="'+itemProduct.img_src+'" alt="'+itemProduct.img_alt+'"></a><div class="cart__item-info">                            <span class="cart__item-text-brand">'+itemProduct.brand+'</span>                      <span class="cart__item-text-name">'+itemProduct.name+'</span><span class="cart__item-text-name">                   Size: '+postData.size+'</span>                       <span class="cart__item-text-cnt">                  <span data-cart-item-cnt>1</span>                    <i>x</i><span data-cart-item-price>$'+itemProduct.price+'</span>                                                               </span></div>                                                <div class="cart__item-remove">                         <i class="fas fa-times-circle cart-item-remove"                                                 data-cart-item-remove-id="' + itemId + '"   data-cart-item-remove-size="'+postData.size+'">                                                             </i>                                        </div></div></div>');

                    }


                    //изменение totalPrice в cart
                    var totalPrice = parseInt($('#cart-totalPrice').text().match(/\d+/));
                    var endTotal = itemProduct.price + totalPrice;
                    $('#cart-totalPrice').html('$' + endTotal);


                }
            }
        });

    });


});