<?php
/**
 *  Контроллер страницы категорий (category/1)
 * 
 */

 // Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категории
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    
    $rsChildCats = null;
    $rsProducts = null;
    $rsCategory = getCatById($catId);


    //>AJAX
    $prmBrands = isset($_GET['brands']) ? implode("','", $_GET['brands']) : null;
    $prmSizes = isset($_GET['sizes']) ? implode(",", $_GET['sizes']) : null;
    $prmPriceFrom = isset($_GET['priceFrom']) ? intval($_GET['priceFrom']) : 0;
    $prmPriceTo = isset($_GET['priceTo']) ? intval($_GET['priceTo']) : 1000;
    $prmSortBy = isset($_GET['sortBy']) ? $_GET['sortBy'] : null;
    $prmGoodsCnt = isset($_GET['goodsCnt']) ? intval($_GET['goodsCnt']) : 30;
    //<
    

    //>Пагинатор
    $paginator = [];
    $paginator['perPage'] = $prmGoodsCnt;
    $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;
    $paginator['offset'] = ($paginator['currentPage'] * $paginator['perPage']) - $paginator['perPage'];
    $paginator['link'] = "/category/$catId/?page="; 
    //<

    //Если isAllCats = 1, то показывать все категории 
    list($rsProducts, $allCnt, $rsAllProducts) = getProductsByCat($catId, $paginator['offset'], $paginator['perPage'], $prmBrands, $prmSizes, $prmPriceFrom, $prmPriceTo, $prmSortBy);

    if ($catId == 0) {
        $isAllCats = 1;
        $smarty->assign('isAllCats', $isAllCats);
    } else {
        //Подкатегории в левом меню
        $rsChildCats = getChildrenForCat($catId);
    }

    
    $paginator['pageCnt'] = ceil($allCnt / $paginator['perPage']);
    $smarty->assign('paginator', $paginator);


    $rsCategories = getAllMainCatsWithChildren();
    
    $rsBrands = getBrandsForCat($rsAllProducts);        

    $smarty->assign('pageTitle', 'Category: ' . $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsBrands', $rsBrands);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);

    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}


