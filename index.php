<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение сессии
session_start();

//Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
require_once(ROOT . '/components/VFunc.php');

$paramsPath = ROOT . '/config/db_params.php';
$params = include($paramsPath);
define('DBNAME', $params['dbname']);

//Подключение Smarty
define('SMARTY_DIR', ROOT . '/includes/smarty/');
require_once(SMARTY_DIR . 'Smarty.class.php');

//Подключение QR кодов
define('QR_DIR', ROOT . '/includes/phpqrcode/');
require_once(QR_DIR . 'qrlib.php');

//Подключение Router
$router = new Router();
$router->run();

