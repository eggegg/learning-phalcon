<?php

$config = require __DIR__.'/../../../config/config.php';
$module_config = new \Phalcon\Config(array(
    'application' => array(
        'controllersDir' => __DIR__ . '/../Controllers/',
        'modelsDir' => __DIR__ . '/../Models/',
        'viewsDir' => __DIR__ . '/../Views/',
        'baseUri' => '/',
        'cryptSalt' => '5up3r5tr0n6p@55',
        'publicUrl' => 'http://phalcon.localhost.dev/'
    )));

$config->merge($module_config);
return $config;