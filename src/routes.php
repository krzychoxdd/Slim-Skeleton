<?php
$controller = new Home();

$app->get('/', function() use($app, $controller){
    $controller->index();
});

$app->get('/user/:word(/:name(/:other))', function($word, $name='', $other='') use($app, $controller){
    $controller->firstAction($word, $name);
})->conditions(array(
    'word' => "[a-zA-Z]+"
));
