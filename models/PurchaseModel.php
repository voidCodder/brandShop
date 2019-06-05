<?php
/**
 *  Модель для таблицы продуктов (purchase)
 * 
 */


/**
 * Внесение в БД данных продукта с привязкой к заказу
 *
 * @param int $orderId ID заказа
 * @param array $cart массив корзины
 * 
 * @return bool TRUE в случае успешного добавления в БД
 */
function setPurchaseForOrder($orderId, $cart) {
    $sql = "INSERT INTO `purchase`
            (`order_id`, `good_id`, `price`, `amount`, `size`)
            VALUES ";

    $values =[];
    //формируем массив строк для запроса для каждого товара
    foreach($cart as $item) {
        foreach($item['amount'] as $size => $value) {
            $values[] = "('{$orderId}', '{$item['id_good']}', '{$item['price']}', '{$value}', '{$size}')";
        }
    }

    //преобразуем массив в строку
    $sql .= implode(', ', $values);
    $rs = db()->query($sql);

    return $rs;
}


/**
 * Получить список товаров в заказе
 *
 * @param int $orderId ID заказа
 * 
 * @return array массив продуктов в заказе
 */
function getPurchaseForOrder($orderId) {
    $sql = "SELECT `pe`.*, `ps`.`name`
            FROM `purchase` as `pe`
            JOIN `goods` as `ps` ON `pe`.good_id = `ps`.id_good
            WHERE `pe`.order_id = {$orderId}";

    $rs = db()->query($sql);

    return createSmartyRsArray($rs);
}