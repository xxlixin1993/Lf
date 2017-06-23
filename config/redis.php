<?php
/**
 * redis.php
 * redis配置文件
 * User: lixin
 * Date: 17-5-21
 */
return [
    'node1' => [
        'host' => env('REDIS_NODE1_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
        'port' => env('REDIS_NODE1_PORT_' . env('ENV', 'DEV'), 6379),
    ],

];