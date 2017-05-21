<?php
/**
 * redis.php
 * redis配置文件
 * User: lixin
 * Date: 17-5-21
 */
return [
    'node1' => [
        'host' => env('REDIS_NODE1_HOST', '127.0.0.1'),
        'port' => env('REDIS_NODE1_PORT', 6380),
        'weight' => env('REDIS_NODE1_WEIGHT', 1),
    ],
    'node2' => [
        'host' => env('REDIS_NODE2_HOST', '127.0.0.1'),
        'port' => env('REDIS_NODE2_PORT', 6380),
        'weight' => env('REDIS_NODE2_WEIGHT', 1),
    ],
    'node3' => [
        'host' => env('REDIS_NODE3_HOST', '127.0.0.1'),
        'port' => env('REDIS_NODE3_PORT', 6380),
        'weight' => env('REDIS_NODE3_WEIGHT', 1),
    ],
];