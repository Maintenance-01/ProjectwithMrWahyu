<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Asset';

		$this->load->view('layout/header_view', $data);
		$this->load->view('layout/sidebar_view');
		$this->load->view('asset_view', $data);
		$this->load->view('layout/footer_view');
	}
}
