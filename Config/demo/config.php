<?php
$global_config_data = [

    'demo' => [
        'businessworker' => [
            'name' => 'LtstudyLockBusinessWorker',
            'count' => '8',
            'registerAddress' => '127.0.0.1:12211'
        ],
        'gateway' => [
            'name' => 'LtstudyLockGateway',
            'count' => '4',
            'lanIp' => '127.0.0.1',
            'startPort' => '14101',
            'protocol' => 'frame://0.0.0.0:4000',
            'registerAddress' => '127.0.0.1:12211',
            'pingInterval' => 15,
            'pingNotResponseLimit' => 4
        ],
        'register' => [
            'name' => 'LtstudyLockRegister',
            'protocol' => 'text://0.0.0.0:12211'
        ],
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6379',
            'database' => '1'
        ]
    ],

//    'cabinet' => [
//        'businessworker' => [
//            'name' => 'KuainuoyouLockBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:14199'
//        ],
//        'gateway' => [
//            'name' => 'KuainuoyouLockGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '14101',
//            'protocol' => 'frame://0.0.0.0:4000',
//            'registerAddress' => '127.0.0.1:14199',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'KuainuoyouLockRegister',
//            'protocol' => 'text://0.0.0.0:14199'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'zhaji' => [
//        'businessworker' => [
//            'name' => 'KuainuoyouZhaJiBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:16199'
//        ],
//        'gateway' => [
//            'name' => 'KuainuoyouZhaJiGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '16101',
//            'protocol' => 'frame://0.0.0.0:6000',
//            'registerAddress' => '127.0.0.1:16199',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'KuainuoyouZhaJiRegister',
//            'protocol' => 'text://0.0.0.0:16199'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'qrcode' => [ // 快诺优二维码
//        'businessworker' => [
//            'name' => 'QrcodeBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:17199'
//        ],
//        'gateway' => [
//            'name' => 'QrcodeGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '17101',
//            'protocol' => 'frame://0.0.0.0:7000',
//            'registerAddress' => '127.0.0.1:17199',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'QrcodeRegister',
//            'protocol' => 'text://0.0.0.0:17199'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'aio' => [ // 快诺优签到一体机
//        'businessworker' => [
//            'name' => 'AioBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:16699'
//        ],
//        'gateway' => [
//            'name' => 'AioGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '16601',
//            'protocol' => 'frame://0.0.0.0:6006',
//            'registerAddress' => '127.0.0.1:16699',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'AioRegister',
//            'protocol' => 'text://0.0.0.0:16699'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'styd' => [ // 用于styd网站消息推送
//        'businessworker' => [
//            'name' => 'StydBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:17599'
//        ],
//        'gateway' => [
//            'name' => 'StydGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '17501',
//            'protocol' => 'websocket://0.0.0.0:7599',
//            'registerAddress' => '127.0.0.1:17599',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4,
//            'local_cert' => '/usr/local/etc/stydssl/_.styd.cn.crt',
//            'local_pk' => '/usr/local/etc/stydssl/_.styd.cn.key',
//        ],
//        'register' => [
//            'name' => 'StydRegister',
//            'protocol' => 'text://0.0.0.0:17599',
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'test' => [ // 用于test消息推送
//        'businessworker' => [
//            'name' => 'TestBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:15199'
//        ],
//        'gateway' => [
//            'name' => 'TestGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '15101',
//            'protocol' => 'frame://0.0.0.0:5000',
//            'registerAddress' => '127.0.0.1:15199',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4,
//        ],
//        'register' => [
//            'name' => 'TestRegister',
//            'protocol' => 'text://0.0.0.0:15199',
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'camera' => [ // 处理摄像头文本消息
//        'businessworker' => [
//            'name' => 'CameraBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:16899'
//        ],
//        'gateway' => [
//            'name' => 'CameraGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '16801',
//            'protocol' => 'frame://0.0.0.0:6008',
//            'registerAddress' => '127.0.0.1:16899',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'CameraRegister',
//            'protocol' => 'text://0.0.0.0:16899'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'iac' => [ // 快诺优门禁一体机
//        'businessworker' => [
//            'name' => 'IacBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:16799'
//        ],
//        'gateway' => [
//            'name' => 'IacGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '16701',
//            'protocol' => 'frame://0.0.0.0:6007',
//            'registerAddress' => '127.0.0.1:16799',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'IacRegister',
//            'protocol' => 'text://0.0.0.0:16799'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
//    'alicamera' => [ // 处理摄像头文本消息
//        'businessworker' => [
//            'name' => 'AliCameraBusinessWorker',
//            'count' => '8',
//            'registerAddress' => '127.0.0.1:17399'
//        ],
//        'gateway' => [
//            'name' => 'AliCameraGateway',
//            'count' => '4',
//            'lanIp' => '127.0.0.1',
//            'startPort' => '17301',
//            'protocol' => 'frame://0.0.0.0:7003',
//            'registerAddress' => '127.0.0.1:17399',
//            'pingInterval' => 15,
//            'pingNotResponseLimit' => 4
//        ],
//        'register' => [
//            'name' => 'AliCameraRegister',
//            'protocol' => 'text://0.0.0.0:17399'
//        ],
//        'redis' => [
//            'host' => '127.0.0.1',
//            'port' => '6379',
//            'database' => '1'
//        ]
//    ],
    'domain_name' => 'http://47.254.25.99/'
];