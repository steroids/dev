<?php

namespace app\billing\enums\meta;

use Yii;
use steroids\core\base\Enum;

abstract class CurrencyEnumMeta extends Enum
{
    const USD = 'usd';
    const RUB = 'rub';
    const EUR = 'eur';

    public static function getLabels()
    {
        return [
            self::USD => Yii::t('app', 'Доллар'),
            self::RUB => Yii::t('app', 'Рубль'),
            self::EUR => Yii::t('app', 'Евро')
        ];
    }
}
