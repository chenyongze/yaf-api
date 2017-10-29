<?php

define("APPLICATION_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
header('content-Type:text/html;charset=utf-8;');

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run();

?>