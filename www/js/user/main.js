
/**
 * Изменение данных пользователя
 */
/* Не работает:? 
$(document).ready($('#updateUserDataBtn').on('click', function updateUserData() {

    var postData = getData('#userInf');

    $.ajax({
        method: 'POST',
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
})
); */
function updateUserData() {

    var postData = getData('#userInf');

    $.ajax({
        method: 'POST',
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
};

/**
 * Авторизация пользователя
 * 
 */
function login(postData) {
    
    $.ajax({
        method: 'POST',
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {

                $('#registerBox, #registerBox-text').hide();
                $('#loginBox, #loginBox-text').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['displayName']);
                $('#userBox').addClass('user-userBox');
                $('#userBox').show();

                //блок в orders
                $('#order-loginBox').hide();
                $('#order-select-login-reg').hide();
                $('#order-data-user').show();
            } else {
                alert(data['message']);
            }
        }
    });
}

/**
 * Регистрация нового пользователя
 * 
 */
function registerNewUser(postData) {
    
    $.ajax({
        method: 'POST',
        url: "/user/register/",
        data: postData,
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                alert('Регистрация прошла успешно');

                //> блок вверху
                $('#registerBox, #registerBox-text').hide();
                $('#loginBox, #loginBox-text').hide();

                $('#userLink').attr('href', '/user/');
                $('#userLink').html(data['userName']);
                $('#userBox').addClass('user-userBox');
                $('#userBox').show();

                //блок в orders
                $('#order-registerBox').hide();
                $('#order-select-login-reg').hide();            
                $('#order-data-user').show();
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
    
    objName = '[data-id=purchasesForOrderId_' + id + ']';
    if ($(objName).css('display') != 'flex') {
        $(objName).show("slow");
        $(objName).css('display', 'flex');
        
    } else {
        $(objName).hide("slow");
    }

} 
    
