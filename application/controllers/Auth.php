<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Auth';
		$this->load->view('auth/login_view', $data);
	}

	public function forgot()
	{
		$data['title'] = 'Forgot Password';
		$this->load->view('auth/forgot_view', $data);
	}

	public function register()
	{
		$data['title'] = 'Register';
		$this->load->view('auth/register_view', $data);
	}

}
