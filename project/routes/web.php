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

$router->get('/commodity', ['uses' => 'CommodityController@showAllCommodity']);

$router->get('/commodity/{commodity_id}', ['uses' => 'CommodityController@showOneCommodity']);

$router->put('/commodity/{commodity_id}', ['uses' => 'CommodityController@updateCommodity']);

$router->post('/commodity', ['uses' =>
'CommodityController@createCommodity']);

$router->delete('/commodity/{commodity_id}', ['uses' =>
'CommodityController@removeCommodity']);
