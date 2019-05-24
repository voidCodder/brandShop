<?php
/**
 * Модель для таблицы категорий (categories)
 * 
 */

/**
 * Получить дочернии категории для категории $catId
 *
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId) {
    $sql = "SELECT *
            FROM `categories`
            WHERE `parent_id` = '{$catId}'";

    if($rs = db()->query($sql)){
        return createSmartyRsArray($rs);
    }
}



/**
 * Получить главные категории с привзяками дочерних
 *
 * @return array массив категорий
 */
function getAllMainCatsWithChildren() {

    $sql = "SELECT *
            FROM `categories`
            WHERE `parent_id` = 0";

    /* извлечение ассоциативного массива */
    if($rs = db()->query($sql)){
        while($row = $rs->fetch_assoc()) {
            
            $rsChildren = getChildrenForCat($row['id_category']);
            if($rsChildren) {
                $row['children'] = $rsChildren;
            }

            $smartyRs[] = $row;
        }
        /* удаление выборки */
        $rs->free();
    }

    /* закрытие соединения */
    db()->close();

    return $smartyRs;
}


/**
 * Получить данные категории по id
 * 
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function getCatById($catId) {

    $catId = intval($catId);

    $sql = "SELECT *
            FROM `categories`
            WHERE `id_category` = '{$catId}'";

    if ($rs = db()->query($sql)) {
        return $rs->fetch_assoc();
    }
}

/**
 * Получить список брендов по категориям
 *
 * @param array $ar массив товаров
 * 
 * @return array массив списка брендов
 */
function getBrandsForCat($ar) { //FIXME: Поправить не существующие категории
    $rs = [];

    foreach($ar as $item){
        $rs[] = $item['brand'];
    }

    $rs = array_unique($rs);
    natcasesort($rs);
    return $rs;
}
