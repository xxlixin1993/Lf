<?php
/**
 * 数据库配置
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午10:26
 */
return [
    'write' => [
        'host' => env('DB_WRITE_HOST', '127.0.0.1'),
        'username' => env('DB_WRITE_USER', 'root'),
        'password' => env('DB_WRITE_PASSWD', '3a963e6c35'),
    ],
    'read' => [
        [
            'host' => env('DB_READ1_HOST', '127.0.0.1'),
            'username' => env('DB_READ1_USER', 'root'),
            'password' => env('DB_READ1_PASSWD', '3a963e6c35'),
        ],
        [
            'host' => env('DB_READ2_HOST', '127.0.0.1'),
            'username' => env('DB_READ2_USER', 'root'),
            'password' => env('DB_READ2_PASSWD', '3a963e6c35'),
        ],
    ],
    'driver' => 'mysql',
    'database' => env('DATABASE', 'test'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
];
