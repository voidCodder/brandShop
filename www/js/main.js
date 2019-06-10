
/**
 * Получение данных с формы
 * 
 */
function getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function () {
        if (this.name && this.name != '') {
            hData[this.name] = this.value;
            // console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
};

/**
 * Скрытие/открытие панели корзины
 */
$(function () {
    $('.brushMenu__dropdown img').on('click', function () {
        $('.dropdown__cart').toggle(1000);
    }) 
 });


 /**
 * Валидация input
 */
var validateInput = {
    phone: /(\+7|7|8)-\d{3}-\d{3}-\d{2}-\d{2}/, 
    htmlphone: "(\+7|7|8)-\d{3}-\d{3}-\d{2}-\d{2}", 
    // email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ,
}
// $(function () {
//     $('input[type="tel"]').each(function () {
//         $(this).attr("pattern", validateInput.htmlphone);
//     });
//     // $('input[type="email"]').each(function () {
//     //     $(this).attr("pattern", validateInput.email);
//     // });
// });

