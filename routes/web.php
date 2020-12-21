<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/article/new', 'ExampleController@getNew');
$router->get('/article', 'ExampleController@getAll');
$router->get('/article/image/new', 'ExampleController@getNewImage');
$router->get('/article/image', 'ExampleController@getImageAll');
$router->get('/article/{id}', 'ExampleController@getId');