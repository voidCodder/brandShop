/**
 * Функция добавления товара в корзину
 * 
 * @param integer itemId ID продукта
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
function addToCart(itemId) {
    console.log("js - addToCart()");
    $.ajax({
        method: 'POST',
        // async: false,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });

}


/**
 * Функция удаления товара из корзины
 * 
 * @param integer itemId ID продукта
 * 
 * @return в случае успеха обновятся данные корзины на странице 
 */
function removeFromCart(itemId) {
    console.log("js - removeFromCart(" + itemId + ")");
    $.ajax({
        method: 'POST',
        // async: false,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    });

}

/**
 * Подсчет стоимости купленного товара
 * 
 * @param integer itemId ID продукта 
 */
function conversionPrice(itemId) {
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}

/**
 * Получение данных с формы
 * 
 */
function getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
};


/**
 * Регистрация нового пользователя
 * 
 */
function registerNewUser() {
    var postData = getData('#registerBox');

    $.ajax({
        method: 'POST',
        // async: false,
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                alert('Регистрация прошла успешно');

                //> блок в левом столбце
                $('#registerBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').show();
                //<

                //> страница заказы
                $('#loginBox').hide();
                $('#btnSaveOrder').show();
                //<
            } else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Авторизация пользователя
 * 
 */
function login() {
    var email = $('#loginEmail').val();
    var pwd = $('#loginPwd').val();

    var postData = "email=" + email + "&pwd=" + pwd;
    $.ajax({
        method: 'POST',
        // async: false,
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#registerBox').hide();
                $('#loginBox').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['displayName']);
                $('#userBox').show();

                //> заполняем поля на странице заказа
                $('#name').val(data['name']);
                $('#phone').val(data['phone']);
                $('#address').val(data['address']);
                //<

                $('#btnSaveOrder').show();
            } else {
                alert(data['message']);
            }
        }
    });
}


/**
 * Показать или прятать форму регистрации
 * 
 */
function showRegisterBox() {
    if ($('#registerBoxHidden').css('display') != 'block') {
        $('#registerBoxHidden').show();
    } else {
        $('#registerBoxHidden').hide();
    }
}


/**
 * Изменение данных пользователя
 */
function updateUserData() {
    console.log("js - updateUserData()");
    var phone = $('#newPhone').val();
    var address = $('#newAddress').val();
    var pwd1 = $('#newPwd1').val();
    var pwd2 = $('#newPwd2').val();
    var curPwd = $('#curPwd').val();
    var name = $('#newName').val();

    var postData = {
        phone: phone,
        address: address,
        pwd1: pwd1,
        pwd2: pwd2,
        curPwd: curPwd,
        name: name
    };

    $.ajax({
        method: 'POST',
        // async: false,
        url: "/user/update/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#userLink').html(data['UserName']);
                alert(data['message']);
            } else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Сохранение заказа
 * 
 */
function saveOrder() {
    var postData = getData('form');
    $.ajax({
        method: 'POST',
        // async: false,
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
}


/**
 * Показывать или спрятывать данные о заказе
 * 
 */
function showProducts(id) {
    var objName = "#purchasesForOrderId_" + id;
    if ($(objName).css('display') != 'block') {
        $(objName).show();
    } else {
        $(objName).hide();
    }
}






/**
 * Акордеон (страница категории)
 * 
 */
$(function () {
    $('.cat-nav-item_span1').click(function (e) {
        $(this).parent().children('.cat-nav-sub').slideToggle(1000);
        return false;
    });
});
$(function () {
    $('.sub-cat1').click(function (e) {
        $(this).parent().next().slideToggle(1000);
        return false;
    });
});


/**
 * Nouislider
 * 
 */
$(function () {
var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [0,1000],
    connect: true,
    step: 10,
    range: {
        'min': [0],
        'max': [1000]
    },
    
});
    
    var inputs = [
        document.getElementById('input-low'),
        document.getElementById('input-up')
    ];

    //При изменение обновлять textbox
    slider.noUiSlider.on('update', function (values, handle) {
        inputs[handle].value = values[handle];
    });
    
    //При изменение textbox обновлять слайдер
    inputs.forEach(function (input, handle) {
        input.addEventListener('change', function () {
            slider.noUiSlider.setHandle(handle, this.value);
        });
    });

    //Получение значения
    // slider.noUiSlider.get()
});