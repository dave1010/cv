<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

// PHP internal server
$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

$app = require __DIR__.'/../application.php';

$app->run();