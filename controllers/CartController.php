<?php
/**
* Контроллер работы с корзиной (/cart/)
*
*/

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
// include_once '../models/OrdersModel.php';
// include_once '../models/PurchaseModel.php';


/**
 * Добавление продукта в корзину
 * 
 * @param int id GET параметр - ID добавляемого продукта
 * 
 * @return json информация об операции (успех, кол-во элементов в корзине)
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;

    $itemSize = isset($_POST['size']) ? ($_POST['size']) : null;
    if (!$itemSize) return false;

    $resData = [];

    // если значение не найдено, то добавляем
    if (isset($_SESSION['cart']) && (!isset($_SESSION['cart'][$itemId][$itemSize]))) {

        $_SESSION['cart'][$itemId][$itemSize] = 1; 
             
        $resData['success'] = 1;
    
    } else if (isset($_SESSION['cart']) && (isset($_SESSION['cart'][$itemId][$itemSize]))) {

            $_SESSION['cart'][$itemId][$itemSize] +=1;

            $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    $resData['cntItems'] = getCntItemsCart();
    

    echo json_encode($resData);
}


/**
 * Формирование страницы корзины
 *
 * @link  /cart/
 */
function indexAction($smarty) {
    $itemIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getProductsFromArray($itemIds);

    foreach($rsProducts as $key => $item) {
        $rsProducts[$key]['amount'] = $_SESSION['cart'][$item['id_good']];
    }

d($rsProducts);
    $smarty->assign('pageTitle', 'Cart');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}