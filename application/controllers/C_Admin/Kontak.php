<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kontak');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['chat'] = $this->m_kontak->tampil_data('chat')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/kontak', $data);
        $this->load->view('templates/footer');
    }
}
