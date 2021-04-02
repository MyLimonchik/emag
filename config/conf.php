<?php

define("DEBUG", 1); // режим работы сайта
define("ROOT", dirname(__DIR__));
define("WWW",ROOT . '/public');
define("APP", ROOT . '/app');
define("CODE", ROOT . '/vendor/emag/core');
define("LIB", ROOT . '/vendor/emag/core');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("TEMPLATE", ROOT . '/default');


$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", '', $app_path); //убрать index.php

$app_path = str_replace('/public', '', $app_path); // убраь паблик

define("PATH", $app_path); // адрес сайта url
define("ADMIN", PATH . '/admin'); // адрес панели администратора

require_once ROOT . '/vendor/autoload.php';

?>