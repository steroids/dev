<?php

namespace app\user\models\meta;

use steroids\core\base\Model;
use steroids\core\behaviors\TimestampBehavior;
use \Yii;

/**
 * @property string $id
 * @property string $role
 * @property string $username
 * @property string $login
 * @property string $email
 * @property string $phone
 * @property string $passwordHash
 * @property string $uiLanguage
 * @property boolean $isBanned
 * @property string $createTime
 * @property string $updateTime
 */
abstract class UserMeta extends Model
{
    public static function tableName()
    {
        return 'users';
    }

    public function fields()
    {
        return [
            'id',
            'username',
        ];
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            [['role', 'username', 'email', 'login'], 'string', 'max' => 255],
            ['email', 'email'],
            ['phone', 'string', 'max' => 32],
            ['passwordHash', 'string'],
            ['uiLanguage', 'string', 'max' => '10'],
            ['isBanned', 'steroids\\core\\validators\\ExtBooleanValidator'],
        ]);
    }

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            TimestampBehavior::class,
        ]);
    }

    public static function meta()
    {
        return array_merge(parent::meta(), [
            'id' => [
                'label' => Yii::t('app', 'ИД'),
                'appType' => 'primaryKey',
                'isPublishToFrontend' => true
            ],
            'role' => [
                'label' => Yii::t('app', 'Роль'),
                'isPublishToFrontend' => false
            ],
            'login' => [
                'label' => Yii::t('app', 'Login'),
                'isPublishToFrontend' => true
            ],
            'username' => [
                'isPublishToFrontend' => true
            ],
            'email' => [
                'label' => Yii::t('app', 'Email'),
                'appType' => 'email',
                'isPublishToFrontend' => false
            ],
            'phone' => [
                'label' => Yii::t('app', 'Телефон'),
                'appType' => 'phone'
            ],
            'passwordHash' => [
                'label' => Yii::t('app', 'Пароль'),
                'appType' => 'text'
            ],
            'uiLanguage' => [
                'label' => Yii::t('app', 'Язык'),
                'stringLength' => '10'
            ],
            'isBanned' => [
                'label' => Yii::t('app', 'Заблокирован?'),
                'appType' => 'boolean',
                'isPublishToFrontend' => false
            ],
            'createTime' => [
                'label' => Yii::t('app', 'Дата регистрации'),
                'appType' => 'autoTime',
                'touchOnUpdate' => false
            ],
            'updateTime' => [
                'label' => Yii::t('app', 'Дата обновления'),
                'appType' => 'autoTime',
                'touchOnUpdate' => true
            ]
        ]);
    }
}
