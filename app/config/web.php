<?php

use steroids\core\boot\Boot;

return Boot::getWebConfig([
    'components' => [
        'request' => [
            'cookieValidationKey' => 'ie#9TkE?pQ6Vs#zHq$UqyzWoNFQU:SJe',
        ],
        'user' => [
            //'class' => 'steroids\core\components\ContextUser',
            'identityClass' => 'app\user\models\User',
        ],
    ],
]);
