<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('AuthModel');
        $this->call->library('session');
        $this->call->database();
    }

    public function login()
    {
        if ($this->session->userdata('authenticated') === true) {
            redirect('products');
        }

        $this->call->view('auth/login', [
            'page_title' => 'Sign in',
            'error' => $this->session->flashdata('error'),
        ]);
    }

    public function authenticate()
    {
        $username = trim((string) $this->request->post('username', ''));
        $password = (string) $this->request->post('password', '');

        if ($username === '' || $password === '') {
            $this->session->set_flashdata('error', 'Enter both your username and password.');
            redirect('login');
        }

        $user = $this->AuthModel->find_by_username($username);
        $valid_password = is_array($user)
            && isset($user['password'])
            && (password_verify($password, $user['password']) || hash_equals((string) $user['password'], $password));

        if (!$valid_password) {
            $this->session->set_flashdata('error', 'Those credentials do not match our records.');
            redirect('login');
        }

        $this->session->after_successful_login();
        $this->session->set_userdata([
            'authenticated' => true,
            'user_id' => (int) $user['id'],
            'username' => $user['username'],
        ]);

        redirect('products');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
