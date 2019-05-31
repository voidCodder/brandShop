<?php
/**
 *  Основные функции
 * 
 */

/**
 * Форматирование запрашиваемой страницы
 *
 * @param [type] $controllerName название контроллера
 * @param string $actionName название функции обработки страницы 
 */
 
function loadPage($smarty, $controllerName, $actionName = 'index') {
    
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}
/**
 * Загрузка шаблона
 *
 * @param [type] $smarty обьект шаблонизатора
 * @param [type] $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы, выводя значение переменной $value
 *
 * @param [type] $value Переменная для вывода её на страницу
 */
function d($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';

    if($die) die;
}

/**
 * Преобразование результа работы ф-ции выборки в ассоциативный массив
 *
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($rs) {

    if(! $rs) return false;

    while($row = $rs->fetch_assoc()) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}


function redirect($url = '/') {
    header("Location: {$url}");
    exit;
}


/**
 * Получить кол-во всех элементов корзины
 * 
 * @return int кол-во всех элементов корзины
 */
function getCntItemsCart() {
    $cnt = 0;
    foreach($_SESSION['cart'] as $value) {
        foreach($value as $key => $item) {
            $cnt += $item;
        }
    }
    return $cnt;
}