<?php

define("DEBUG", 1); // ����� ������ �����
define("ROOT", dirname(__DIR__));
define("WWW",ROOT . '/public');
define("APP", ROOT . '/app');
define("CODE", ROOT . '/vendor/emag/core');
define("LIB", ROOT . '/vendor/emag/core');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("TEMPLATE", ROOT . '/default');


$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", '', $app_path); //������ index.php

$app_path = str_replace('/public', '', $app_path); // ����� ������

define("PATH", $app_path); // ����� ����� url
define("ADMIN", PATH . '/admin'); // ����� ������ ��������������

require_once ROOT . '/vendor/autoload.php';

?>