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

    $smarty->assign('pageTitle', 'BrandShop');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}


function aboutAction($smarty) {
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'The company');
    $smarty->assign('rsCategories', $rsCategories);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, '-about');
    loadTemplate($smarty, 'footer');
}


function presscontactAction($smarty) {
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'The company');
    $smarty->assign('rsCategories', $rsCategories);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, '-presscontact');
    loadTemplate($smarty, 'footer');
}


function careersAction($smarty) {
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'The company');
    $smarty->assign('rsCategories', $rsCategories);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, '-careers');
    loadTemplate($smarty, 'footer');
}