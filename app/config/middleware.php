<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once APP_DIR . 'middlewares/AuthMiddleware.php';
require_once APP_DIR . 'middlewares/GuestMiddleware.php';

$middleware_config = [
    'auth'  => new AuthMiddleware(),
    'guest' => new GuestMiddleware(),
];
get_config(['middlewares' => $middleware_config]);
