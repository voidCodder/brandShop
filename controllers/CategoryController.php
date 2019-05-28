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
    $prmBrands = isset($_POST['brands']) ? implode(",", $_POST['brands']) : null;
    $prmSizes = isset($_POST['sizes']) ? implode(",", $_POST['sizes']) : null;
    $prmPriceFrom = isset($_POST['priceFrom']) ? intval($_POST['priceFrom']) : 0;
    $prmPriceTo = isset($_POST['priceTo']) ? intval($_POST['priceTo']) : 1000;
    $prmSortBy = isset($_POST['sortBy']) ? $_POST['sortBy'] : null;
    $prmGoodsCnt = isset($_POST['goodsCnt']) ? intval($_POST['goodsCnt']) : 30;
    //<
    // $prmBrands = implode(",", $prmBrands);

    // echo intval($prmPriceFrom);
    // var_dump( $prmBrands);


    //>Пагинатор
    $paginator = [];
    $paginator['perPage'] = $prmGoodsCnt;
    $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;
    $paginator['offset'] = ($paginator['currentPage'] * $paginator['perPage']) - $paginator['perPage'];
    $paginator['link'] = "/category/$catId/?page="; 
    //<

    //Если $catId=0, то показываем все товары
    //Если главная категория, то показываем дочернии категории - иначе показываем товар
    //Если isAllCats = 1, то показывать все категории 
    if($catId == 0) {
        list($rsProducts, $allCnt, $rsAllProducts) = getAllProducts($paginator['offset'], $paginator['perPage']);

        $isAllCats = 1;
        $smarty->assign('isAllCats', $isAllCats);
    } else if($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);

        list($rsProducts, $allCnt, $rsAllProducts) = getProductsByMainCat($rsChildCats, $paginator['offset'], $paginator['perPage']);
    } else {
        list($rsProducts, $allCnt, $rsAllProducts) = getProductsByCat($catId, $paginator['offset'], $paginator['perPage']);

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

    echo json_encode($rsProducts);
}

function filterAction($smarty){
    $rsProducts = '1,2,3,4,5';
    echo json_encode($rsProducts);
}