<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    // slim configs
    'log.enable' => false,
    'debug' => true,
    'mode' => 'development',
    'templates.path' => '../src/views',
    
    // system
    'templates.ext' => '.php'
));

@include_once('../src/system.php');
@include_once('../src/routes.php');

$app->run();