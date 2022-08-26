<?php

session_start();
if (! in_array('cart', array_keys($_SESSION))) { $_SESSION['cart'] = []; }

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
    ['GET', '/cart/[i:id]/add', 'CartController@add'],
    ['GET', '/cart/list', 'CartController@list'],
]);

$app->run();
