<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: GuestMiddleware
 *
 * Prevents an already-authenticated user from seeing the login page
 * again; sends them straight to the product list instead.
 */
class GuestMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param Closure $next
     * @return mixed
     */
    public function handle(Closure $next)
    {
        $lava = lava_instance();
        $lava->call->library('session');

        if ($lava->session->userdata('authenticated') === true) {
            redirect('products');
            return;
        }

        return $next();
    }
}