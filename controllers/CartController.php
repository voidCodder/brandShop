<?php
/**
* Контроллер работы с корзиной (/cart/)
*
*/

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';


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
    if (isset($_SESSION['cart']) && (!isset($_SESSION['cart'][$itemId]['amount'][$itemSize]))) {

        $_SESSION['cart'][$itemId]['amount'][$itemSize] = 1; 
             
        $resData['success'] = 1;
        $resData['cntItems'] = getCntItemsCart();
    
    } else if (isset($_SESSION['cart']) && (isset($_SESSION['cart'][$itemId]['amount'][$itemSize]))) {

        $_SESSION['cart'][$itemId]['amount'][$itemSize] +=1;

        $resData['success'] = 1;
        $resData['cntItems'] = getCntItemsCart();
    } else {
        $resData['success'] = 0;
    }

    //добавляем поля товара
    if($_SESSION['cart'] != null) {
        $rsProducts = getProductsFromArray($_SESSION['cart']);

        foreach($rsProducts as $key => $item) {
            $rsProducts[$key]['amount'] = $_SESSION['cart'][$item['id_good']]['amount'];
            $rsProducts2[$item['id_good']] = $rsProducts[$key];
        }
    }
    $_SESSION['cart'] = $rsProducts2;


    echo json_encode($resData);
}


/**
 * Формирование страницы корзины
 *
 * @link  /cart/
 */
function indexAction($smarty) {

    $rsCategories = getAllMainCatsWithChildren();

    
    $smarty->assign('pageTitle', 'Cart');
    $smarty->assign('rsCategories', $rsCategories);
    

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}


/**
 * Удаление продукта из корзины
 * 
 * @param int itemId POST параметр - ID удаляемого из корзины продукта
 * @param int itemSize POST параметр - Size удаляемого из корзины продукта
 * 
 * @return json информация об операции (успех, кол-во элементов в корзине)
 */
function removefromcartAction() {
    $itemId = isset($_POST['itemId']) ? intval($_POST['itemId']) : null;
    if(! $itemId) return false;
    $itemSize = isset($_POST['itemSize']) ? $_POST['itemSize'] : null;
    if(! $itemSize) return false;

    $resData = [];

    if(isset($_SESSION['cart'][$itemId]['amount'][$itemSize])) {
        unset($_SESSION['cart'][$itemId]['amount'][$itemSize]);
        $resData['success'] = 1;
        $resData['cntItems'] = getCntItemsCart();
    } else {
        $resData['success'] = 0;
    }

    //осчистка целого элемента в $_SESSION['cart']
    if(empty($_SESSION['cart'][$itemId]['amount'])) {
        unset($_SESSION['cart'][$itemId]);
    }

    echo json_encode($resData);
}


/**
 * Очистка корзины
 * 
 * @return json информация об операции (успех, кол-во элементов в корзине)
 */
function clearcartAction() {
    $resData = [];

    if(isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        $resData['success'] = 1;
        $resData['cntItems'] = 0;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}


/**
 * Формирование страницы заказа
 *
 */
function orderAction($smarty) {
    //получаем массив товаров корзины
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
    $itemsSizes = isset($_GET['itemsCnt']) ? $_GET['itemsCnt'] : null;
    //если корзина пуста, то редиректим в корзину
    if(! $itemsIds || ! $itemsSizes) {
        redirect('/cart/');
        return;
    }

    //обновляем значения кол-ва товаров после /cart/
    $i = 0;
    foreach($itemsIds as &$item) {
        foreach($item as $size => &$value) {
            $value = $itemsSizes[$i];
            $i++;
        }
    }

    //Получаем список продуктов по массиву корзины
    if($itemsIds != null) {
        $rsProducts = getProductsFromArray($itemsIds);

        foreach($rsProducts as $key => $item) {
            $rsProducts[$key]['amount'] = $_SESSION['cart'][$item['id_good']];
        }
    }
    
    //полученный массив покупаемых товаров помещаем в сесионную переменную
    $_SESSION['saleCart'] = $rsProducts;

    $rsCategories = getAllMainCatsWithChildren();

    //hideLoginBox переменная - для того чтобы спрятать блоки логина и регистрации в боковой панели
    if(! isset($_SESSION['user'])) {
        $smarty->assign('hideLoginBox', 1);
    }

    $smarty->assign('pageTitle', 'Order');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'order');
    loadTemplate($smarty, 'footer');
}


/**
 * AJAX функция сохранения заказа
 * 
 * @param array $_SESSION['saleCart'] массив покупаемых продуктов
 * 
 * @return json информация о результате выполнения
 */
function saveOrderAction() {
    //получаем массив покупаемых товаров
    $cart = isset($_SESSION['saleCart']) ? $_SESSION['saleCart'] : null;
    //если корзина пуста, то формируем ответ с ошибкой, отдаем его в формате json и выходим из функции
    if(! $cart) {
        $resData['success'] = 0;
        $resData['message'] = 'No products to order';
        echo json_encode($resData);
        return;
    }

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;

    //создаем новый заказ и получаем его ID
    $orderId = makeNewOrder($name, $phone, $address);

    //если заказ не создан, то выдаем ошибку и завершаем функцию
    if(! $orderId) {
        $resData['success'] = 0;
        $resData['message'] = 'Error creating order';
        echo json_encode($resData);
        return;
    }

    //сохраняем товары для созданного заказа
    $res = setPurchaseForOrder($orderId, $cart);

    //если успешно, то фармируем ответ, удаляем переменные корзины
    if($res) {
        $resData['success'] = 1;
        $resData['message'] = 'The order is created';
        unset($_SESSION['saleCart']);
        unset($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Error entering data for order №' . $orderId;
    }
    echo json_encode($resData);
}