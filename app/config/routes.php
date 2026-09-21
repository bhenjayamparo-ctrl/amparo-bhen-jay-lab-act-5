<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once APP_DIR . 'config/middleware.php';

$router->get('/', 'Welcome::index');

/*AUTHENTICATION ROUTES*/
$router->get('/login', 'AuthController::login')->middleware('guest');
$router->post('/login', 'AuthController::authenticate')->middleware('guest');
$router->post('/logout', 'AuthController::logout');

/*PRODUCT MANAGEMENT ROUTES (protected - requires login)*/
$router->group(['prefix' => '/products', 'middleware' => 'auth'], function ($router) {
    $router->get('/', 'ProductsController::index');
    $router->get('/create', 'ProductsController::create');
    $router->post('/', 'ProductsController::store');
    $router->get('/edit/{id}', 'ProductsController::edit')->where_number('id');
    $router->post('/update/{id}', 'ProductsController::update')->where_number('id');
    $router->post('/delete/{id}', 'ProductsController::delete')->where_number('id');
});
