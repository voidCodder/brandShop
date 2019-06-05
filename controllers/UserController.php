<?php
/**
 * Контроллер функций пользователя
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной пользователя
 * 
 * @return json массив данных нового пользователя
 */
function registerAction() {
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $email = trim($email);
    
    $pwd1 = isset($_POST['pwd1']) ? $_POST['pwd1'] : null;
    $pwd2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : null;

    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $name = trim($name); 

    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    if(! $resData && checkUserEmail($email)) {
        $resData['success'] = false;
        $resData['message'] = "Пользователь с таким email: '{$email}' уже зарегистрирован";
    }

    if(! $resData) {
        $pwdMD5 = md5($pwd1);

        $userData = registerNewUser($email, $pwdMD5, $name, $phone, $address);
        if($userData['success']) {
            $resData['message'] = 'Пользователь успешно зарегистрирован';
            $resData['success'] = 1;

            $userData = $userData[0];

            $resData['userName'] = $userData['user_name'] ? $userData['user_name'] : $userData['user_email'];
            $resData['userEmail'] = $email;

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData['user_name'] ? $userData['user_name'] : $userData['user_email'];
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка регистрации';
        }
    }
    echo json_encode($resData);
}

/**
 * Разлогинивание пользователя
 * 
 */
function logoutAction() {
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }

    redirect('/');
}

/**
 * AJAX авторизация пользователя
 * 
 * @return json массив данных пользователя 
 */
function loginAction() {
    $email = isset($_POST['loginEmail']) ? $_POST['loginEmail'] : null;
    $email = trim($email);

    $pwd = isset($_POST['loginPwd']) ? $_POST['loginPwd'] : null;
    $pwd = trim($pwd);

    $userData = loginUser($email, $pwd);

    if($userData['success']) {
        $userData = $userData[0];

        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['user_name'] ? $userData['user_name'] : $userData['user_email'];
        
        $resData = $_SESSION['user'];
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Неверный логин или пароль';
    }
    echo json_encode($resData);
}


/**
 * Формирование главной страницы пользователя
 *
 * @link /user/
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {
    
    //если пользователь не залогинен, то редирект на главную
    if(! isset($_SESSION['user'])) {
        redirect('/');
    }

    //получить все категории
    $rsCategories = getAllMainCatsWithChildren();

    //получение списка заказов пользователя
    $rsUserOrders = getCurUserOrders();

    $smarty->assign('pageTitle', 'Account');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsUserOrders', $rsUserOrders);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'user');
    loadTemplate($smarty, 'footer');
}



/**
 * Обновление данных пользователя
 * 
 * @return json результаты выполнения функций
 */
function updateAction()
{
    //> если пользователь не залогинен, то редирект на главную
    if (!isset($_SESSION['user'])) {
        redirect('/');
    }
    //<

    //> Инициализация переменных
    $resData = [];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $pwd1 = isset($_POST['pwd1']) ? $_POST['pwd1'] : null;
    $pwd2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : null;
    $curPwd = isset($_POST['curPwd']) ? $_POST['curPwd'] : null;
    //<

    // Проверка правильности пароля (введенный и тот, под которым залогинились)
    $curPwdMd5 = md5($curPwd);
    if (!$curPwd || ($_SESSION['user']['user_password'] != $curPwdMd5)) {
        $resData['success'] = 0;
        $resData['message'] = 'Текущий пароль не верный';
        echo json_encode($resData);
        return false;
    }

    $res = updateUserData($name, $phone, $address, $pwd1, $pwd2, $curPwdMd5);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Данные изменены';
        $resData['userName'] = $name;

        $_SESSION['user']['user_name'] = $name;
        $_SESSION['user']['phone'] = $phone;
        $_SESSION['user']['address'] = $address;

        //если изменяем пароль
        if ($pwd1 && ($pwd1 == $pwd2)) {
            $_SESSION['user']['user_password'] = md5(trim($pwd1));
        }

        $_SESSION['user']['displayName'] = $name ? $name : $_SESSION['user']['user_email'];
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка сохранения данных';
    }
    echo json_encode($resData);
}