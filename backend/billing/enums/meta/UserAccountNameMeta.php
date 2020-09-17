<?php

namespace app\billing\enums\meta;

use Yii;
use steroids\core\base\Enum;

abstract class UserAccountNameMeta extends Enum
{
    const MAIN = 'main';

    public static function getLabels()
    {
        return [
            self::MAIN => Yii::t('app', 'Main'),
        ];
    }
}
