$(function () {

    $('#showMyAcc').on('click', function () {
        $('#myAccContainer').toggle(1000);
    });


    /**
     * Регистрация нового пользователя
     * 
     */
    $('#registerBtn').on('click', function registerNewUser() {
        var postData = getData('#registerBox');
        console.log(postData);
        $.ajax({
            method: 'POST',
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
                    //<
                } else {
                    alert(data['message']);
                }
            }
        });
    });


    /**
     * Авторизация пользователя
     * 
     */
    $('#loginBtn').on('click', function login() {
        var postData = getData('#loginBox');
        $.ajax({
            method: 'POST',
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

                } else {
                    alert(data['message']);
                }
            }
        });
    });


    /**
     * Изменение данных пользователя
     */
    $('#updateUserDataBtn').on('click', function updateUserData() {

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
    });
    

});


