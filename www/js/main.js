
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