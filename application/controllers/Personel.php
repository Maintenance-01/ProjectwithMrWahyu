<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Personel';

		$this->load->view('layout/header_view', $data);
		$this->load->view('layout/sidebar_view');
		$this->load->view('personel_view', $data);
		$this->load->view('layout/footer_view');
	}
}
