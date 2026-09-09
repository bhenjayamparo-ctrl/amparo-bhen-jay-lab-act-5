<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->library('session');

		if ($this->session->userdata('authenticated') === true) {
			redirect('products');
		}

		redirect('login');
	}
}
?>