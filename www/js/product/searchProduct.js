/**
 * Поиск продуктов по строке 
 */
$(function () {

    //при не фокусе скрыть
    $('#searchInput').blur(function(){$('#search-block').hide();});

    //задержка при последовательном введении множества символов
    $('#searchInput').on('keyup', delay(function () {

        postData = {
            str: $('#searchInput').val()
        }

        $.ajax({
            method: 'POST',
            url: "/product/search/",
            data: postData,
            dataType: 'json',
            beforeSend: function (html) {
                $('#search-block').empty();
            },
            success: function (data) {

                $('#search-block').show();

                if (data === undefined || data === null) {
                    $('#search-block').append('<span class="emptyItem">NO ITEMS MATCHING</span>')
                }

                $.each(data, function (index, value) {
                    $('#search-block').append('<div class="cart-item"> \
                        <div class="cart__item flex"> \
                        <a href="/product/' + value.id_good + '/" > <img src="/img/goods/' + value.id_category + '/'+ value.image +'.jpg" alt="' + value.brand +'-'+ value.name + '"></a> \
                        <div class= "cart__item-info"> \
                        <span class="cart__item-text-brand"> ' + value.brand + '</span> \
                        <span class="cart__item-text-name"> ' + value.name + '</span> \
                        <span> $' + value.price + '</span> \
                        </span></div>                                                </div></div>');
                })                 
                    
            }
        });


    }, 250));

});

function delay(fn, ms) {
    let timer = 0
    return function(...args) {
      clearTimeout(timer)
      timer = setTimeout(fn.bind(this, ...args), ms || 0)
    }
  }