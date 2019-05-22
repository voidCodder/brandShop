<?php
/**
 *  Контроллер главной страницы
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


/**
 * Формирование главной страницы сайта
 *
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {

    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(8); 
// d($rsProducts);
    $smarty->assign('pageTitle', 'BrandShop');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}