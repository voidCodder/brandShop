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
function getProductsByCat($catId, $offset, $limit, $brands, $sizes, $priceFrom, $priceTo, $sortBy)
{
    //Запись в sql форму $sortBy - 'сортировать по'
    switch ($sortBy) {
        case 'Name':
            $sortBysql = 'ORDER BY `name`';
            break;
        case 'Increase price':
            $sortBysql = 'ORDER BY `price`';
            break;
        case 'Decrease price':
            $sortBysql = 'ORDER BY `price` DESC';
            break;
        case 'On new':
            $sortBysql = 'ORDER BY `id_good` DESC';
            break;
    }

    //Если все товары
    if ($catId == 0) {
        $catId = getAllCats();
    }//Если категория главная, то найти дочернии 
    else {
        $catId = getSubCats($catId);
    }

    $sql = "SELECT *
            FROM `goods`
            WHERE (`id_category` IN ({$catId})";

    if($brands != null) {
        $sql .= "AND `brand` IN ('{$brands}')";
    }

    if ($sizes != null) {
        $sql .= "AND `id_good` IN(
                SELECT `good_id` FROM `stock`
                WHERE (
                `good_id` IN (
                SELECT `id_good` FROM goods
                WHERE `id_category` IN ({$catId})
                ) AND
                `size` IN ('{$sizes}') AND `count` > 0 
                ))";
    }

    if ($priceFrom != null) {
        $sql .= "AND `price` > ({$priceFrom})";
    }
    if ($priceTo != null) {
        $sql .= "AND `price` < ({$priceTo})";
    }

    $sql .= "AND `status` = 1)";

    $sql .= "{$sortBysql}";

    
    $rsAllProducts = createSmartyRsArray(db()->query($sql));
    //Кол-во всех элементов для вывода 
    $cnt = count($rsAllProducts);
    
    $sql .= " LIMIT {$offset}, {$limit}";
    $rows = createSmartyRsArray(db()->query($sql));

    return array($rows, $cnt, $rsAllProducts);
}
