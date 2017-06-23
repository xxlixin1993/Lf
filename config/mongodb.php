<?php
return [
    'report_0x18' => [
        'host' => env('MONGO_HOST_' . env('ENV', 'DEV'), '127.0.0.1'),
        'username' => env('MONGO_USERNAME_' . env('ENV', 'DEV'), ''),
        'password' => env('MONGO_PASSWD_' . env('ENV', 'DEV'), ''),
        'port' => env('MONGO_PORT_' . env('ENV', 'DEV'), 27017),
    ],
];