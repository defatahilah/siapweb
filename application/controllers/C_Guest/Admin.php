<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['tabeladmin'] = $this->m_admin->tampil_data('tabeladmin')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/Admin', $data);
        $this->load->view('templates/footer');
    }
}
