<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: AuthMiddleware
 *
 * Blocks unauthenticated visitors from reaching protected routes
 * (product management pages) before the controller action even runs.
 * Redirects them to /login if they are not signed in.
 */
class AuthMiddleware
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

        if ($lava->session->userdata('authenticated') !== true) {
            $lava->session->set_flashdata('error', 'Please log in to continue.');
            redirect('login');
            return;
        }

        return $next();
    }
}