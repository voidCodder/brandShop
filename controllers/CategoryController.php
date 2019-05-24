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

    $limit = 3;
    //>Пагинатор
    $paginator = [];
    $paginator['perPage'] = $limit;
    $paginator['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 1;
    $paginator['offset'] = ($paginator['currentPage'] * $paginator['perPage']) - $paginator['perPage'];
    $paginator['link'] = "/category/$catId/?page="; 
    //<

    //Если $catId=0, то показываем все товары
    //Если главная категория, то показываем дочернии категории - иначе показываем товар
    //Если isAllCats = 1, то показывать все категории 
    if($catId == 0) {
        list($rsProducts, $allCnt) = getAllProducts($paginator['offset'], $paginator['perPage']);

        $isAllCats = 1;
        $smarty->assign('isAllCats', $isAllCats);
    } else if($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);

        list($rsProducts, $allCnt) = getProductsByMainCat($rsChildCats, $paginator['offset'], $paginator['perPage']);
    } else {
        list($rsProducts, $allCnt) = getProductsByCat($catId, $paginator['offset'], $paginator['perPage']);

    }
    $paginator['pageCnt'] = ceil($allCnt / $paginator['perPage']);
    $smarty->assign('paginator', $paginator);


    $rsCategories = getAllMainCatsWithChildren();
    
    $rsBrands = getBrandsForCat($rsProducts);        

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