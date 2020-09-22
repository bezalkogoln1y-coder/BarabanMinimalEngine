<?php

require __DIR__ . '/vendor/autoload.php';

use Core\Router;

session_start();

error_reporting(E_ALL); // Показываем что нужно выводить ошибки
ini_set('display_errors', 1); // Показываем что нужно выводить ошибки
define('DIR_TPL', __DIR__ . '/tpl/');
define('MAIN_TPL', 'main');

Router::start();
