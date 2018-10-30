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
            'startPort' => '12109',
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
            'registerAddress' => '127.0.0.1:9504'
        ],
        'gateway' => [
            'name' => 'HskyLockGateway',
            'count' => '4',
            'lanIp' => '127.0.0.1',
            'startPort' => '12110',
            'protocol' => 'tcp://0.0.0.0:6000',
            'registerAddress' => '127.0.0.1:9504',
            'pingInterval' => 15,
            'pingNotResponseLimit' => 4
        ],
        'register' => [
            'name' => 'HskyLockRegister',
            'protocol' => 'text://0.0.0.0:9504'
        ],
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6379',
            'database' => '1'
        ]
    ],

];