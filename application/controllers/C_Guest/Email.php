<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_email');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['tabelemail'] = $this->m_email->tampil_data('tabelemail')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/email', $data);
        $this->load->view('templates/footer');
    }
}
