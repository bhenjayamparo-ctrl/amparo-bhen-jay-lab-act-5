<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/*Middleware: AuthMiddleware*/
class AuthMiddleware
{
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
