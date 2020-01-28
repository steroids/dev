<?php

return [
    'env' => 'dev',
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=127.0.0.1;dbname=steroids',
            'username' => 'root',
            'password' => '',
        ],
    ],
    'modules' => [
        'gii' => [
            'steroidsDevDir' => __DIR__ . '/steroids',
            'frontendDirs' => [
                'gii-frontend' => __DIR__ . '/steroids/gii/frontend',
            ],
        ],
    ],
];
