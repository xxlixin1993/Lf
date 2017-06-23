<?php

set_time_limit(0);// 设置超时时间为无限,防止超时
require_once __DIR__ . '/../../bootstrap/Init.php';
require_once __DIR__ . '/../../vendor/autoload.php';
//定义根目录
define('BASEDIR', __DIR__."/../../");
bootstrap\Init::getInstance(__DIR__.'/../../')->init('script');
echo 'cron';