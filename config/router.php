<?php
/**
 * 路由配置文件
 * 配置规则 module @ controller @ action
 * User: lixin
 * Date: 2017/3/26
 * Time: 下午8:10
 */
return [
    'GET' => [
        '/' => 'car@Index@index',
        '/page' => 'member@Index@page',
    ],
    'POST' => [
        '/' => 'member@Index@index',
    ],
    'PUT' => [
        '/index' => 'member@Index@index',
    ],
    'DELETE' => [
        '/index' => 'car@Index@index',
    ]

];