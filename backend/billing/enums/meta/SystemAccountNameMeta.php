<?php

namespace app\billing\enums\meta;

use Yii;
use steroids\core\base\Enum;

abstract class SystemAccountNameMeta extends Enum
{
    const GATEWAY_MANUAL = 'gateway_manual';

    public static function getLabels()
    {
        return [
            self::GATEWAY_MANUAL => Yii::t('app', 'Ручное пополнение'),
        ];
    }
}
