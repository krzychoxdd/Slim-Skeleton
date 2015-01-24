<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'log.enable' => false,
    'debug' => true,
));

@include_once('../src/system.php');
@include_once('../src/routes.php');

$app->run();