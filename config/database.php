<?php
/**
 * 数据库配置
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午10:26
 */
return [
    'write' => [
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '3a963e6c35',
    ],
    'read' => [
        [
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '3a963e6c35'
        ],
        [
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '3a963e6c35',
        ],
    ],
    'driver' => 'mysql',
    'database' => 'test',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
];
