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
 * @param array $ar массив всех товаров категории
 * 
 * @return array массив списка брендов
 */
function getBrandsForCat($ar) { 
    $rs = [];

    //Если не существует товаров в данной категории
    if($ar){
        foreach ($ar as $item) {
            $rs[] = $item['brand'];
        }
    }
   
    $rs = array_unique($rs);
    natcasesort($rs);

    return $rs;
}


/**
 * Получить все категории, в случае с главной категорией(category/0)
 * 
 * @return string -id дочерних категорий
 */
function getAllCats() {
    $sql = "SELECT `id_category`
        FROM `categories`
        WHERE (`parent_id` != '0')";

    $rs = createSmartyRsArray(db()->query($sql));
    foreach ($rs as $item) {
        $catIds[] = $item['id_category'];
    }
    $catId = implode(", ", $catIds);

    return $catId;
}


/**
 * Получить все категории, в случае с Подглавными категориями(parent_id=0)
 *
 * @param int $catId id категории
 * 
 * @return string -id дочерних категорий
 */
function getSubCats($catId) {
    $sql = "SELECT `id_category`
        FROM `categories`
        WHERE (`parent_id` = '0' AND `id_category` = '{$catId}')";
    $rs = db()->query($sql);


    if (mysqli_num_rows($rs) != 0) {
        $catId = getChildrenForCat($catId);

        foreach ($catId as $item) {
            $catIds[] = $item['id_category'];
        }
        $catId = implode(", ", $catIds);
    }
}

