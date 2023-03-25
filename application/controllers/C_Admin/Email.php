<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_email');
        logged_in();
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['tabelemail'] = $this->m_email->tampil_data('tabelemail')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/email', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_email()
    {
        $data['title'] = 'Siapweb';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/tambah_email');
        $this->load->view('templates/footer');
    }

    public function tambah_email_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_email();
        } else {
            $skpd1      = $this->input->post('skpd1');
            $email         = $this->input->post('email');

            $data = array(
                'skpd1'     => $skpd1,
                'email'      => $email,

            );

            $this->m_email->tambah_data($data, 'tabelemail');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Email Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Email');
        }
    }

    public function hapus_email_aksi($id)
    {
        $where = array('id' => $id);
        $this->m_email->hapus_data($where, 'tabelemail');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Email Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Email');
    }

    public function ubah_email($id)
    {
        $id = $this->uri->segment(2);
        $where = array('id' => $id);
        $data['title'] = 'Siapweb';
        $data['tabelemail'] = $this->m_email->ubah_data($where, 'tabelemail')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_email', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_email_aksi()
    {
        $id                 = $this->input->post('id');
        $skpd1              = $this->input->post('skpd1');
        $email              = $this->input->post('email');


        $data = array(
            'skpd1'      => $skpd1,
            'email'      => $email,

        );

        $where = array('id' => $id);

        $this->m_email->ubah_data_aksi($where, $data, 'tabelemail');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Email Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Email');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'skpd1',
            'SKPD',
            'required',
            array('required' => 'Data SKPD harus diisi.')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            array('required' => 'Email harus diisi.')
        );
    }
    public function print()
    {
        $data['tabelemail'] = $this->m_email->tampil_data('tabelemail')->result();
        $this->load->view('admin/print_email', $data);
    }
}
