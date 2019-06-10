$(function () {
    $('#showMyAcc').on('click', function () {
        $('#myAccContainer').toggle(700);
    });

    $('#loginBox-text').on('click', function () {
        $('#loginBox').toggle(300);
    });
    $('#registerBox-text').on('click', function () {
        $('#registerBox').toggle(300);
    });
    
    
    $('#registerBtn').on('click', function() {
        var postData = getData('#registerBox');
        registerNewUser(postData);
    });
    $('#loginBtn').on('click', function () {
        var postData = getData('#loginBox');
        login(postData);
    });


    //>ORDER
    $('#order-loginBtn').on('click', function () {
        var postData = getData('#order-loginBox');
        login(postData);
    });
    $('#order-registerBtn').on('click', function () {
        var postData = getData('#order-registerBox');
        registerNewUser(postData);
    });
    //<ORDER


    $('#loginBox, #registerBox').on('submit', function (event) {
        event.preventDefault();
    })
})