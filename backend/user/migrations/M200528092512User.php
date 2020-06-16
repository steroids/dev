<?php

namespace app\user\migrations;

use steroids\core\base\Migration;

class M200528092512User extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'role' => $this->string(),
            'username' => $this->string(),
            'login' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'passwordHash' => $this->text(),
            'uiLanguage' => $this->string(10),
            'isBanned' => $this->boolean(),
            'createTime' => $this->dateTime(),
            'updateTime' => $this->dateTime(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('users');
    }
}
