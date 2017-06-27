<?php
/**
 * 入口文件
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap/Init.php';

//定义根目录
define('BASEDIR', __DIR__);

//初始化程序
try {
    bootstrap\Init::getInstance(__DIR__)->init();
} catch (app\exception\HttpException $httpException) {
    echo $httpException->getCode();
    echo $httpException->getMessage();
}

