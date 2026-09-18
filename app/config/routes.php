<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @since Version 1
 * @link https://github.com/ronmarasigan/LavaLust
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
/** @var object $router **/

// Register the middleware map before the router dispatches any route.
require_once APP_DIR . 'config/middleware.php';

$router->get('/', 'Welcome::index');

/*
| -------------------------------------------------------------------
| AUTHENTICATION ROUTES
| -------------------------------------------------------------------
| 'guest' middleware keeps an already-logged-in user from seeing the
| login form again.
*/
$router->get('/login', 'AuthController::login')->middleware('guest');
$router->post('/login', 'AuthController::authenticate')->middleware('guest');
$router->post('/logout', 'AuthController::logout');

/*
| -------------------------------------------------------------------
| PRODUCT MANAGEMENT ROUTES (protected - requires login)
| -------------------------------------------------------------------
| Every route in this group runs through AuthMiddleware first. If the
| visitor is not logged in, AuthMiddleware redirects to /login and the
| ProductsController action never even runs.
*/
$router->group(['prefix' => '/products', 'middleware' => 'auth'], function ($router) {
    $router->get('/', 'ProductsController::index');
    $router->get('/create', 'ProductsController::create');
    $router->post('/', 'ProductsController::store');
    $router->get('/edit/{id}', 'ProductsController::edit')->where_number('id');
    $router->post('/update/{id}', 'ProductsController::update')->where_number('id');
    $router->post('/delete/{id}', 'ProductsController::delete')->where_number('id');
});