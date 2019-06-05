<?php
/**
 *  Модель для таблицы заказов (orders)
 * 
 */

/**
 * Создание заказа (без привязки товара)
 *  
 * @param string $name
 * @param string $phone
 * @param string $address
 * 
 * @return int ID создаваемого заказа
 */
function makeNewOrder($name, $phone, $address) {
    $name = htmlspecialchars(mysqli_real_escape_string(db(), $name));
    $phone = htmlspecialchars(mysqli_real_escape_string(db(), $phone));
    $address = htmlspecialchars(mysqli_real_escape_string(db(), $address));
    
    //> инициализация переменных
    $userId = $_SESSION['user']['id_user'];
    
    $dateCreated = date('Y.m.d H:i:s');
    //< 

    //Формирование запроса к БД
    $sql = "INSERT INTO
            `orders` (`id_user`, `datetime_create`, `date_payment`, `user_name`, `user_phone`, `user_address`)
            VALUES ('{$userId}', '{$dateCreated}', null, '{$name}', '{$phone}', '{$address}')";

    $rs = db()->query($sql);

    //получить ID создаваемого заказа
    if($rs) {
        $sql = "SELECT `id_order`
                FROM `orders`
                ORDER BY `id_order` DESC
                LIMIT 1";
        $rs = db()->query($sql);
        //преобразуем результат запроса
        $rs = createSmartyRsArray($rs);

        //возвращаем id созданного запроса
        if(isset($rs[0])) {
            return $rs[0]['id_order'];
        }
    }
    return false;
}


/**
 * Получить список заказов с привязкой продуктов для пользователя $userId
 *
 * @param int $userId ID пользователя
 * 
 * @return array массив заказов с привязкой к продуктам
 */
function getOrdersWithProductsByUser($userId) {
    $userId = intval($userId);
    $sql = "SELECT * FROM `orders`
            WHERE `id_user` = '{$userId}'
            ORDER BY `id_order` DESC";
    
    $rs = db()->query($sql);

    $smartyRs = [];
    while($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getPurchaseForOrder($row['id_order']);

        if($rsChildren) {
            $row['children'] = $rsChildren;
            $smartyRs[] = $row;
        }
    }

    return $smartyRs;
}