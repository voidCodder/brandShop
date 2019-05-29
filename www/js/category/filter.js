/**
 * Фильтр товаров
 * 
 */


/**
 * Получить значения с input: checkbox
 * 
 * @param {*} name checkbox name 
 * @param {*} array массив куда вложить данные
 */
function getDataFromCheckboxes(name, array) {
	array = [];
	$("input:checkbox[name=" + name + "]:checked").each(function () {
		array.push($(this).val());
	});
	return array;
}


$(function () {
    var btnClear = $('#filter-clear');
    var btnApply = $('#filter-apply');
	
	

	btnClear.on("click", function () {
		slider.noUiSlider.reset();
        window.location.assign(window.location.pathname);
	});

	var arBrands; //массив брендов
	var arSizes; //массив размеров
	var filterPrice = []; //массив фильтра-цены
	var filterSortBy; //сортировка по чему
	var filterShowCnt; //По сколько выводить
		
	btnApply.on("click", function () {

		// Внести значения в массив filterPrice
		slider.noUiSlider.on('update', function (values, handle) {
			filterPrice[handle] = values[handle];
		});

		arBrands = getDataFromCheckboxes('brands', arBrands); //массив брендов
		arSizes = getDataFromCheckboxes('sizes', arSizes); //массив размеров
		filterSortBy = $('select[name="sort-by"]').val();
		filterShowCnt = $('select[name="show-kolvo"]').val();
        
		var getData = {
				brands: arBrands,
				sizes: arSizes,
				priceFrom: parseInt(filterPrice[0]),
				priceTo: parseInt(filterPrice[1]),
				sortBy: filterSortBy,
				goodsCnt: filterShowCnt
        }
        
        //обьект в URL 
        var getDataToUrl = $.param(getData);
        window.location.assign(window.location.pathname + "?" + getDataToUrl + '');

	});

});

