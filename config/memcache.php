<?php
/**
 * memcache.php
 * memcache配置
 * User: lixin
 * Date: 17-5-20
 */
return [
    'node1' => [
        'host' => env('MEMCACHE_NODE1_HOST', '127.0.0.1'),
        'port' => env('MEMCACHE_NODE1_PORT', 11211),
        'weight' => env('MEMCACHE_NODE1_WEIGHT', 1),
    ],
    'node2' => [
        'host' => env('MEMCACHE_NODE2_HOST', '127.0.0.1'),
        'port' => env('MEMCACHE_NODE2_PORT', 11211),
        'weight' => env('MEMCACHE_NODE2_WEIGHT', 1),
    ],
    'node3' => [
        'host' => env('MEMCACHE_NODE3_HOST', '127.0.0.1'),
        'port' => env('MEMCACHE_NODE3_PORT', 11211),
        'weight' => env('MEMCACHE_NODE3_WEIGHT', 1),
    ],
];