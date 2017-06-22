<?php
/**
 * 路由配置文件 版本新的定义在前 旧的定义在后
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:10
 */
return [
    'v120' => [
        'GET' => [
            '/' => 'Index@index',
            '/pageEx' => 'Index@page'
        ],
        'POST' => [
            '/' => 'Index@index',
        ],
        'PUT' => [
            '/' => 'Index@index',
        ],
        'DELETE' => [
            '/' => 'Index@index',
        ]
    ],
    'v110' => [
        'GET' => [
            '/' => 'Index@index',
            '/pageEx' => 'Index@page'
        ],
        'POST' => [
            '/' => 'Index@index',
        ],
        'PUT' => [
            '/' => 'Index@index',
        ],
        'DELETE' => [
            '/' => 'Index@index',
        ]
    ],
];