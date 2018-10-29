<?php
$global_config_data = [
    'demo' => [
        'businessworker' => [
            'name' => 'HskyLockBusinessWorker',
            'count' => '8',
            'registerAddress' => '127.0.0.1:9502'
        ],
        'gateway' => [
            'name' => 'HskyLockGateway',
            'count' => '4',
            'lanIp' => '127.0.0.1',
            'startPort' => '2000',
            'protocol' => 'tcp://0.0.0.0:4000',
            'registerAddress' => '127.0.0.1:9502',
            'pingInterval' => 15,
            'pingNotResponseLimit' => 4
        ],
        'register' => [
            'name' => 'HskyLockRegister',
            'protocol' => 'text://0.0.0.0:9502'
        ],
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6379',
            'database' => '1'
        ]
    ],

    'tcp' => [
        'businessworker' => [
            'name' => 'HskyLockBusinessWorker',
            'count' => '8',
            'registerAddress' => '127.0.0.1:9503'
        ],
        'gateway' => [
            'name' => 'HskyLockGateway',
            'count' => '4',
            'lanIp' => '127.0.0.1',
            'startPort' => '2001',
            'protocol' => 'tcp://0.0.0.0:6000',
            'registerAddress' => '127.0.0.1:9503',
            'pingInterval' => 15,
            'pingNotResponseLimit' => 4
        ],
        'register' => [
            'name' => 'HskyLockRegister',
            'protocol' => 'text://0.0.0.0:9503'
        ],
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6379',
            'database' => '1'
        ]
    ],

];