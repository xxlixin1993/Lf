<?php
/**
 * WebSocket
 * User: lixin
 * Date: 2017/3/31
 * Time: 下午5:09
 */
set_time_limit(0);// 设置超时时间为无限,防止超时
require_once __DIR__ . '/../../bootstrap/init.php';
require_once __DIR__ . '/../../vendor/autoload.php';
//定义根目录
define('BASEDIR', __DIR__."/../../");
bootstrap\Init::getInstance(__DIR__.'/../../')->init('script');
$ws = new core\WebSocket("127.0.0.1", "8080");