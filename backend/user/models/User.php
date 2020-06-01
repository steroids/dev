<?php

namespace app\user\models;

use app\user\models\meta\UserMeta;
use steroids\auth\UserInterface;
use steroids\auth\UserTrait;

class User extends UserMeta implements UserInterface
{
    use UserTrait;

    /**
     * @param string $templateName
     * @param array $params
     * @return void
     */
    public function sendNotify($templateName, $params = [])
    {
        // TODO
    }
}
