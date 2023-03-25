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
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Siapweb';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('guest/kontak', $data);
            $this->load->view('templates/footer');
        } else {
            $nama      = $this->input->post('nama');
            $email         = $this->input->post('email');
            $pesan         = $this->input->post('pesan');

            $data = array(
                'nama'     => $nama,
                'email'      => $email,
                'pesan'      => $pesan,

            );

            $this->m_kontak->kontak($data, 'chat');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
            redirect('C_Guest/Kontak');
        }
    }
    // public function kontak_aksi()
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->kontak();
    //     } else {
    //         $nama      = $this->input->post('nama');
    //         $email         = $this->input->post('email');
    //         $pesan         = $this->input->post('pesan');

    //         $data = array(
    //             'nama'     => $nama,
    //             'email'      => $email,
    //             'pesan'      => $pesan,

    //         );

    //         $this->m_kontak->kontak($data, 'chat');
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         Data Admin Berhasil Ditambahkan!
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //         </button></div>');
    //         redirect('Kontak');
    //     }
    // }
}
