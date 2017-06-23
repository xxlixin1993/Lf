<?php
/**
 * 数据库配置
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午10:26
 */
return [
    'test' => [
        'write' => [
            'host' => env('DB_WRITE_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
            'username' => env('DB_WRITE_USER_' . env('ENV', 'DEV'), 'root'),
            'password' => env('DB_WRITE_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
        ],
        'read' => [
            [
                'host' => env('DB_READ1_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
                'username' => env('DB_READ1_USER_' . env('ENV', 'DEV'), 'root'),
                'password' => env('DB_READ1_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
            ],
            [
                'host' => env('DB_READ2_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
                'username' => env('DB_READ2_USER_' . env('ENV', 'DEV'), 'root'),
                'password' => env('DB_READ2_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
            ],
        ],
        'database' => env('DATABASE_TEST_' . env('ENV', 'DEV'), 'test'),
        'driver' => 'mysql',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],

    '17car_clw' => [
        'write' => [
            'host' => env('DB_WRITE_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
            'username' => env('DB_WRITE_USER_' . env('ENV', 'DEV'), 'root'),
            'password' => env('DB_WRITE_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
        ],
        'read' => [
            [
                'host' => env('DB_READ1_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
                'username' => env('DB_READ1_USER_' . env('ENV', 'DEV'), 'root'),
                'password' => env('DB_READ1_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
            ],
            [
                'host' => env('DB_READ2_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
                'username' => env('DB_READ2_USER_' . env('ENV', 'DEV'), 'root'),
                'password' => env('DB_READ2_PASSWD_' . env('ENV', 'DEV'), '3a963e6c35'),
            ],
        ],
        'database' => env('DATABASE_17CAT_CLW_' . env('ENV', 'DEV'), '17car_clw'),
        'driver' => 'mysql',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ],
];
