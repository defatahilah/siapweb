<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aplikasi');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['aplikasi'] = $this->m_aplikasi->tampil_data('aplikasi')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('guest/aplikasi', $data);
        $this->load->view('templates/footer');
    }
}
