<?php

/**
 * Инициализация подключения к БД
 * 
 */


/**
 * Соединение с БД
 *
 */
function db() {
    $db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    //  Устанавливает кодировку по умолчанию для текущего соединения
    $db->set_charset('utf8');

    /* проверка соединения */
    if($db->connect_errno) {
        // die('MySQL access denied.');
        printf('Ошибка при подключении: ' . mysqli_connect_error());
    }
    return $db;
}
