<?php

$config = require dirname(__DIR__) . '/bootstrap.php';
(new \steroids\core\base\WebApplication($config))->run();