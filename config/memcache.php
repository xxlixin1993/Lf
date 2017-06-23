<?php
/**
 * memcache.php
 * memcache配置
 * User: lixin
 * Date: 17-5-20
 */
return [
    'node1' => [
        'host' => env('MEMCACHE_NODE1_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
        'port' => env('MEMCACHE_NODE1_PORT_' . env('ENV', 'DEV'), 11211),
        'weight' => env('MEMCACHE_NODE1_WEIGHT_' . env('ENV', 'DEV'), 1),
    ],
    'node2' => [
        'host' => env('MEMCACHE_NODE2_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
        'port' => env('MEMCACHE_NODE2_PORT_' . env('ENV', 'DEV'), 11211),
        'weight' => env('MEMCACHE_NODE2_WEIGHT_' . env('ENV', 'DEV'), 1),
    ],
    'node3' => [
        'host' => env('MEMCACHE_NODE3_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
        'port' => env('MEMCACHE_NODE3_PORT_' . env('ENV', 'DEV'), 11211),
        'weight' => env('MEMCACHE_NODE3_WEIGHT_' . env('ENV', 'DEV'), 1),
    ],
];