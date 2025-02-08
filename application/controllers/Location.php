<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Location';

		$this->load->view('layout/header_view', $data);
		$this->load->view('layout/sidebar_view');
		$this->load->view('location_view', $data);
		$this->load->view('layout/footer_view');
	}
}
