<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profile';

        $this->load->view('layout/header_view', $data);
        $this->load->view('layout/sidebar_view');
        $this->load->view('profile_view', $data);
        $this->load->view('layout/footer_view');
    }
}
