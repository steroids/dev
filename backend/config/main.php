<?php

use steroids\core\boot\Boot;

return Boot::getMainConfig([
    'id' => 'steroids-dev',
    'name' => 'Steroids Dev App',
    'language' => 'en',
    'timeZone' => 'UTC',
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=steroids-dev',
            'username' => '',
            'password' => '',
        ],
    ],
    'modules' => [
        'auth' => [
            'userClass' => '\app\user\models\User',
            'captcha' => [
                'class' => '\steroids\auth\components\captcha\ReCaptchaV3',
                'secretKey' => 'google secret key'
            ]
        ],
        'billing' => [
            'rates' => [
                '\steroids\billing\rates\EuropeanCentralBankRate',
            ],
        ],
    ],
    'params' => [
        'adminEmail' => '',
    ],
]);
