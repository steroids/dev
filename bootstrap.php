<?php

use steroids\core\boot\Boot;
use steroids\core\helpers\ModuleHelper;
use yii\helpers\ArrayHelper;

define('STEROIDS_APP_DIR', __DIR__ . '/backend');

$customConfig = require __DIR__ . '/steroids/core/boot/preload.php';
$steroidsDevDir = ArrayHelper::getValue($customConfig, 'modules.gii.steroidsDevDir');

// Set alias for steroids when develop steroids lib
foreach (ModuleHelper::findModules($steroidsDevDir) as $module) {
    \Yii::setAlias('@' . str_replace('\\', '/', $module->namespace), $module->dir);
}

return Boot::resolveConfig($customConfig);
