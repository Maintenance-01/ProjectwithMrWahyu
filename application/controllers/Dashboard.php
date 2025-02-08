<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('layout/header_view', $data);
		$this->load->view('layout/sidebar_view');
		$this->load->view('dashboard_view', $data);
		$this->load->view('layout/footer_view');
	}
}
