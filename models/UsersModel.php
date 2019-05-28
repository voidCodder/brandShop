<?php
/**
 * Модель для таблицы пользователей (users)
 * 
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль, зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $address адрес пользователя
 * 
 * @return array массив данных нового пользователя
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $address)
{
    $email = htmlspecialchars(mysqli_real_escape_string(db(), $email));
    $name = htmlspecialchars(mysqli_real_escape_string(db(), $name));
    $phone = htmlspecialchars(mysqli_real_escape_string(db(), $phone));
    $address = htmlspecialchars(mysqli_real_escape_string(db(), $address));

    $sql = "INSERT INTO
            `user` (`user_email`, `user_password`, `user_name`, `phone`, `address`) 
            VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$address}')";
        
    if($rs = db()->query($sql)) {
        $sql = "SELECT *
                FROM `user`
                WHERE (`user_email`='{$email}' and `user_password`='{$pwdMD5}') 
                LIMIT 1";

        $rs = db()->query($sql);
        $rs = createSmartyRsArray($rs);
        if(isset($rs[0])) {
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }
    return $rs;
}


/**
 * Проверка параметров для регистрации пользователя
 *
 * @param string $email email
 * @param string $pwd1 пароль
 * @param string $pwd2 повтор пароля
 * 
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2) {
    $res = null;

    if(! $email) {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

    if(! $pwd1) {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    if(! $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    if($pwd1 != $pwd2) {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    return $res;
}

/**
 * Проверка почта (есть ли email адрес в БД)
 *
 * @param string $email
 * 
 * @return array массив- строка из таблицы users, либо пустой массив
 */
function checkUserEmail($email) {
    $email = mysqli_real_escape_string(db(), $email);
    $sql = "SELECT `id_user` FROM `user` WHERE `user_email` = '{$email}'";

    $rs = db()->query($sql);
    $rs = createSmartyRsArray($rs);

    return $rs;
}

/**
 * Авторизация пользователя
 *
 * @param string $email почта (логин)
 * @param string $pwd пароль
 * 
 * @return array массив данных пользователя
 */
function loginUser($email, $pwd) {
    $email = htmlspecialchars(mysqli_real_escape_string(db(), $email));
    $pwd = md5($pwd);

    $sql = "SELECT *
            FROM `user`
            WHERE (`user_email`='{$email}' and `user_password`='{$pwd}')
            LIMIT 1";

    $rs = db()->query($sql);
    $rs = createSmartyRsArray($rs);
    if(isset($rs[0])) {
        $rs['success'] = 1;
    } else {
        $rs['success'] = 0;
    }
    return $rs;
}



/**
 * Изменение данных пользователя пользователя
 *
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $address адрес пользователя
 * @param string $pwd1 новый пароль
 * @param string $pwd2 повтор нового пароля
 * @param string $curPwd текущий пароль
 * 
 * @return bool true в слечае успеха
 */
function updateUserData($name, $phone, $address, $pwd1, $pwd2, $curPwd)
{
    $email = htmlspecialchars(mysqli_real_escape_string(db(), $_SESSION['user']['user_email']));
    $name = htmlspecialchars(mysqli_real_escape_string(db(), $name));
    $phone = htmlspecialchars(mysqli_real_escape_string(db(), $phone));
    $address = htmlspecialchars(mysqli_real_escape_string(db(), $address));
    $pwd1 = trim($pwd1);
    $pwd2 = trim($pwd2);

    $newPwd = null;
    if ($pwd1 && ($pwd1 == $pwd2)) {
        $newPwd = md5($pwd1);
    }

    $sql = "UPDATE `user`
            SET ";

    if ($newPwd) {
        $sql .= " `user_password` = '{$newPwd}', ";
    }

    $sql .= " `user_name` = '{$name}',
            `phone` = '{$phone}',
            `address` = '{$address}'
            WHERE 
            `user_email` = '{$email}' AND `user_password` = '{$curPwd}'
            LIMIT 1";

    $rs = db()->query($sql);

    return $rs;
}


/**
 * Получить данные заказа текущего пользователя
 * 
 * @return array массив заказов с привязкой к продуктам
 */
function getCurUserOrders()
{
    $userId = isset($_SESSION['user']['id_user']) ? $_SESSION['user']['id_user'] : 0;
    $rs = getOrdersWithProductsByUser($userId);

    return $rs;
}