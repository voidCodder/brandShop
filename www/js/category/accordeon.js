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
