<?php

namespace app\billing\migrations;

use yii\db\Migration;

/**
 * Class M200908085738AddCurrencies
 */
class M200908085738AddCurrencies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach (['usd' => 'Доллар', 'eur' => 'Евро', 'rub' => 'Рубль'] as $code => $label) {
            $this->insert('billing_currencies', [
                'code' => $code,
                'label' => $label,
                'precision' => 2,
                'rateUsd' => $code === 'usd' ? 1 : null,
                'ratePrecision' => 2,
                'isVisible' => true,
                'createTime' => date('Y-m-d H:i:s'),
                'updateTime' => date('Y-m-d H:i:s'),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('billing_currencies', [
            'code' => ['usd', 'eur', 'rub'],
        ]);
    }
}
