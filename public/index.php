<?php

use Yaf\Application;

// [ 应用入口文件 ]
date_default_timezone_set("Asia/Shanghai");
if (!defined('__ROOT__')) {
    $_root = rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/');
    define('__ROOT__', (('/' == $_root || '\\' == $_root) ? '' : $_root));
}
error_reporting(E_ALL);
// 定义应用目录
define("APP_PATH", dirname(dirname(__FILE__)));
//define('APPLICATION_PATH', dirname(__DIR__));

$application = new Application( APP_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
