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

use Laravel\Lumen\Routing\Router;

$router->group(['prefix' => 'api'], function (Router $router) {

    // AUTH
    $router->post('register', [
        'uses' => 'AuthController@register'
    ]);
    $router->post('login', [
        'uses' => 'AuthController@login'
    ]);

    // Products
    $router->get('products', [
        'uses' => 'ProductController@get'
    ]);

    // AccountProducts
    $router->post('accountProducts',[
        'uses' => 'AccountProductController@post'
    ]);
    $router->get('accountProducts',[
        'uses' => 'AccountProductController@get'
    ]);

    // News
    $router->get('news', [
        'uses' => 'NewsItemController@get'
    ]);
});
