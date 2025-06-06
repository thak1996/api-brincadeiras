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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'brincadeiras'], function () use ($router) {
        $router->get('/', 'BrincadeiraController@index');
        $router->post('/', 'BrincadeiraController@store');
        $router->get('/{id}', 'BrincadeiraController@show');
        $router->put('/{id}', 'BrincadeiraController@update');
        $router->delete('/{id}', 'BrincadeiraController@destroy');
    });

    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
});