<?php
/**
 * Модель для таблицы продукции (goods)
 * 
 */


/**
 *  Получаем последние добавленные товары
 * 
 * @param integer $limit Лимит товаров
 * @return array Массив товаров
 */
function getLastProducts($limit = null) {
    $sql = "SELECT *
            FROM `goods`
            WHERE `status` = '1'
            ORDER BY `id_good` DESC";

    if($limit) {
        $sql .= " LIMIT {$limit}"; 
    }

    if($rs = db()->query($sql)){
        return createSmartyRsArray($rs);
    }
}


/**
 * Получить продукты для категории $itemId
 *
 * @param int $itemId ID категории
 * 
 * @return array массив продуктов
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM `goods`
            WHERE `id_category` = '{$itemId}'";

    if ($rs = db()->query($sql)) {
        return createSmartyRsArray($rs);
    }
}

/**
 * Получить список всех продуктов из таблицы(goods)
 * 
 * @return array массив продуктов
 */
function getAllProducts() {
    $sql = "SELECT *
            FROM `goods`";
            
    if ($rs = db()->query($sql)) {
        return createSmartyRsArray($rs);
    }
}


/**
 * Получить продукты главной категории
 *
 * @param array $ar массив дочерниз категорий
 * 
 * @return array массив продуктов главной категории
 */
function getProductsByMainCat($ar)
{
    foreach ($ar as $item) {
        $catIds[] = $item['id_category'];
    }
    $catIds = implode(", ", $catIds);

    $sql = "SELECT *
            FROM `goods`
            WHERE `id_category`
            IN ({$catIds})";

    if ($rs = db()->query($sql)) {
        return createSmartyRsArray($rs);
    }
}
