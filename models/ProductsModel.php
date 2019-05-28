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
 * @return array $rows - массив продуктов Лимит
 *               $cnt - кол-во всего продуктов
 *               $rsAllProducts массив всех продуктов
 */
function getProductsByCat($itemId, $offset, $limit = 30)
{
    //Кол-во всех элементов для вывода 
    $sqlCnt = "SELECT count(id_good) as cnt
            FROM `goods`
            WHERE (`id_category` = '{$itemId}' AND `status` = 1)";
    $cnt = createSmartyRsArray(db()->query($sqlCnt));
    //

    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM `goods`
            WHERE (`id_category` = '{$itemId}' AND `status` = 1)";

    $rsAllProducts = createSmartyRsArray(db()->query($sql));

    $sql .= " LIMIT {$offset}, {$limit}";
    
    
    $rs = db()->query($sql);
    $rows = createSmartyRsArray($rs);
    
    return array($rows, $cnt[0]['cnt'], $rsAllProducts);
}

/**
 * Получить список всех продуктов из таблицы(goods)
 * @param int $limit кол-во элементов для вывода на страницу
 * 
 *  @return array $rows - массив продуктов Лимит
 *               $cnt - кол-во всего продуктов
 *               $rsAllProducts массив всех продуктов
 */
function getAllProducts($offset, $limit = 30) {
    //Кол-во всех элементов для вывода 
    $sqlCnt = "SELECT count(id_good) as cnt
            FROM `goods`
            WHERE `status` = '1'";
    $cnt = createSmartyRsArray(db()->query($sqlCnt));
    //


    $sql = "SELECT *
            FROM `goods`
            WHERE `status` = '1'";

    $rsAllProducts = createSmartyRsArray(db()->query($sql));

    $sql .= " LIMIT {$offset}, {$limit}";

    $rs = db()->query($sql);
    $rows = createSmartyRsArray($rs);

    return array($rows, $cnt[0]['cnt'], $rsAllProducts);
}


/**
 * Получить продукты главной категории
 *
 * @param array $ar массив дочерниз категорий
 * 
 * @return array $rows - массив продуктов главной категории Лимит
 *               $cnt - кол-во всего продуктов
 *               $rsAllProducts массив всех продуктов
 */
function getProductsByMainCat($ar, $offset, $limit = 30)
{
    foreach ($ar as $item) {
        $catIds[] = $item['id_category'];
    }
    $catIds = implode(", ", $catIds);


    //Кол-во всех элементов для вывода 
    $sqlCnt = "SELECT count(id_good) as cnt
            FROM `goods`
            WHERE (`id_category`
            IN ({$catIds}) AND `status` = '1')";
    $cnt = createSmartyRsArray(db()->query($sqlCnt));
    //

    $sql = "SELECT *
            FROM `goods`
            WHERE (`id_category`
            IN ({$catIds}) AND `status` = '1')";

    $rsAllProducts = createSmartyRsArray(db()->query($sql));

    $sql .= " LIMIT {$offset}, {$limit}";

    $rs = db()->query($sql);
    $rows = createSmartyRsArray($rs);

    return array($rows, $cnt[0]['cnt'], $rsAllProducts);
}
