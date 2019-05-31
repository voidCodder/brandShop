<?php
/**
 * Контроллер страницы товара (/product/1)
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


/**
 * Формирование страницы продукта
 *
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty)
{
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) exit();

    //получить данные продукта и размеры
    $rsProduct = getProductsById($itemId);
    $rsProduct['size'] = getSizesFromProductById($itemId);

    //получить все категории
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('itemInCart', 0);
    if (isset($_SESSION['cart'][$itemId])) {
        $smarty->assign('itemInCart', 1);
    }

    $smarty->assign('pageTitle', $rsProduct['brand'] ." ". $rsProduct['name']);
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}
