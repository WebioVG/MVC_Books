<?php

use M2i\Mvc\App;

require __DIR__.'/../vendor/autoload.php';

define('BASE_URL', '/php-poo/perso/MVC_Books/public');

$app = new App();
$app->setBasePath(BASE_URL);

$app->addRoutes([
    ['GET', '/', 'HomeController@index'],
    ['GET', '/list', 'BookController@list'],
    ['GET', '/show/[i:id]', 'BookController@show'],
    ['GET|POST', '/add', 'BookController@add'],
    ['GET|POST', '/book/[i:id]/edit', 'BookController@edit'],
    ['GET|POST', '/book/[i:id]/delete', 'BookController@delete'],
]);

$app->run();
