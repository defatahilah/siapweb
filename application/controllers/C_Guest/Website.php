<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_website');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['website'] = $this->m_website->tampil_data('Website');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/website', $data);
        $this->load->view('templates/footer');
    }
}
