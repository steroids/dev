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
    'params' => [
        'adminEmail' => '',
    ],
]);
