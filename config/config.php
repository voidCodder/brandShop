<?php
/**
 *  Файл настроек
 * 
 */

/* DB config */
define('DBHOST', '127.0.0.1');
define('DBNAME', 'brandshop');
define('DBUSER', 'root');
define('DBPASS', '');
// define('DBHOST', 'localhost');
// define('DBNAME', 'id9888922_brandshop');
// define('DBUSER', 'id9888922_root_1');
// define('DBPASS', 'root_1');

//>  Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<


// пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/"); 
define('TemplatePostfix', '.tpl');

//  пути к файлам шаблонов в вебпронстранстве
define('TemlateWebPath', "/");
//<

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemlateWebPath);
 

