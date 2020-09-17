<?php

namespace app\user\models;

use app\user\models\meta\UserMeta;
use steroids\auth\UserInterface;
use steroids\auth\UserTrait;

class User extends UserMeta implements UserInterface
{
    use UserTrait;

    public function fields()
    {
        return [
            'id',
            'name',
        ];
    }

    /**
     * @param string $templateName
     * @param array $params
     * @return void
     */
    public function sendNotify($templateName, $params = [])
    {
        // TODO
    }

    /**
     * @param string $email
     * @return User|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->email;
    }
}
